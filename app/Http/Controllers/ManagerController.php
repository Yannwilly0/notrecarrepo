<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicules;
use App\Models\Driver;
use App\Models\vehicule_driver;
use App\Models\last_visite;
use App\Models\vehicules_summary;
use App\Models\vehicules_months_recharges;
use App\Models\vehicules_months_maintenances;
use App\Models\fuel_recharges;
use App\Models\car_maintenances;
use App\Models\car_maintenance_details;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class ManagerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:manager');
    }
    
    public function update_visites()
    {

        $visites = last_visite::select('last_date','next_date','car_id')->get();
        foreach($visites as $visite)
        {
            if($visite->last_date != "en attente")
            {
                try 
                {

                        $origin = date_create($visite->last_date);
                        $target = date_create($visite->next_date);
                        $interval = date_diff($origin, $target);
                        $countdown =  $interval->format('%R%a');
                        last_visite::where('car_id',$visite->car_id)
                            ->update(['countdown'=>$countdown]);
                  
                  } 
                  catch (\Exception $e) 
                  {
                  
                    return redirect()->back()->with('error','Une erreur avec les dates, veuillez réessayer plus tard');
                  }
            }
            

            
        }
        return redirect()->back()->with('success','Mises à jour effectuées');
    }
    
    public function home()
    {

        $months = array(1=>"JANVIER",2=>"FEVRIER",3=>"MARS",4=>"AVRIL",5=>"MAI",6=>"JUIN",7=>"JUILLET",8=>"AOUT",9=>"SEPTEMBRE",10=>"OCTOBRE",11=>"NOVEMBRE",12=>"DECEMBRE");
        $month = date('m');
        $year = date('Y');
        $data['recharges'] = vehicules_months_recharges::where('month',$month)->where('year',$year)->select('recharges')->first();
        if(!$data['recharges'])
        {
            $data['recharges'] = 0;
        }
        else
        {
            $data['recharges'] =  $data['recharges']->recharges;
        }
        $data['maintenances'] = vehicules_months_maintenances::where('month',$month)->where('year',$year)->select('maintenances')->first();
        if(!$data['maintenances'])
        {
            $data['maintenances'] = 0;
        }
        else
        {
            $data['maintenances'] = $data['maintenances']->maintenances;
        }
        $data['office'] = vehicules_summary::where('id',1)->select('office')->first();

        $months_recharges = vehicules_months_recharges::where('year',$year)->select('month','recharges')->get();
       //
       foreach($months_recharges as $datas)
       {
           $data['months'][] = $months[$datas->month];
           $data['months_recharges'][] = $datas->recharges;
       }
      
       return view('manager/home',['data'=>$data]);
       
    }
    public function demandes()
    {
        return view('manager/demandes');
    }
    public function recharge()
    {
        $data['vehicules'] = vehicules::select('id','name','licence')->get();
        return view('manager/recharge',['data'=>$data]);
    }
    public function entretien()
    { 
        return view('manager/entretien');
    }
    public function parametres_vehicules()
    { 
        $data['settings'] = vehicules_summary::where('id',1)->select('office','next_vidange')->first();
        return view('manager/settings',['data'=>$data]);
    }
    public function maintenance()
    {
        $data['vehicules'] = vehicules::select('id','name','licence')->get();
        $data['maintenances'] = DB::table('maintenance_type')->select('id','type')->get();
        return view('manager/maintenance',['data'=>$data]);
    }
    public function maintenance_details($id)
    {
        $data['maintenance'] = DB::table('car_maintenances')->where('car_maintenances.id',$id)
        ->join('maintenance_type','car_maintenances.type_id','=','maintenance_type.id')
        ->join('vehicules','car_maintenances.car_id','=','vehicules.id')
        ->select('car_maintenances.date','maintenance_type.type','car_maintenances.locality','car_maintenances.total_cost','car_maintenances.maintenance_cost','vehicules.name as vehicule','vehicules.licence')
        ->first();

        $data['details'] = car_maintenance_details::where('maintenance_id',$id)->select('item','cost')->get();
        return view('manager/maintenance_details',['data'=>$data]);
    }
    public function vehicules()
    {
            $data['vehicules'] = DB::table('vehicule_drivers')
            ->join('vehicules','vehicule_drivers.vehicule_id','=','vehicules.id')
            ->join('drivers','vehicule_drivers.driver_id','=','drivers.id')
            ->select('drivers.name as driver','drivers.contacts as contact','vehicules.name as vehicule','vehicules.licence','vehicules.id as vehicule_id')
            ->get();
        return view('manager/vehicules',['data'=>$data]);
    }
    public function visites()
    {
            $data['visites'] = DB::table('vehicule_drivers')
            ->join('vehicules','vehicule_drivers.vehicule_id','=','vehicules.id')
            ->join('drivers','vehicule_drivers.driver_id','=','drivers.id')
            ->join('last_visites','vehicules.id','=','last_visites.car_id')
            ->select('drivers.name as driver','drivers.contacts as contact','vehicules.name as vehicule','vehicules.licence','vehicules.id as vehicule_id','last_visites.last_date','last_visites.next_date','last_visites.countdown')
            ->get();
        return view('manager/last_visites',['data'=>$data]);
    }
    public function vehicule($id)
    {
        $data['vehicule'] = vehicules::where('id',$id)->select('id','name as vehicule','licence')->first();
      
        $data['maintenances'] = DB::table('car_maintenances')->where('car_maintenances.car_id',$id)
            ->join('maintenance_type','car_maintenances.type_id','=','maintenance_type.id')
            ->select('car_maintenances.id','car_maintenances.date','maintenance_type.type','car_maintenances.locality','car_maintenances.items_changed','car_maintenances.total_cost','car_maintenances.maintenance_cost')
            ->get();
        return view('manager/vehicule',['data'=>$data]);
    }
    public function vehicule_edit($id)
    {
        $data['vehicule'] = DB::table('vehicule_drivers')->where('vehicule_id',$id)
        ->join('vehicules','vehicule_drivers.vehicule_id','=','vehicules.id')
        ->join('drivers','vehicule_drivers.driver_id','=','drivers.id')
        ->select('drivers.id as driver_id','vehicules.name as vehicule','vehicules.licence','vehicules.id as vehicule_id')
        ->first();

        $data['drivers'] = Driver::select('id as driver_id','name')->get();

        return view('manager/vehicule_edit',['data'=>$data]);
    }
    public function car_recharge_history($id)
    {
        $data['vehicule'] = vehicules::where('id',$id)->select('id','name as vehicule','licence')->first();
        $data['recharges'] = fuel_recharges::where('car_id',$id)->select('date','zone','cost','kilometers')->get();
        return view('manager/car_recharge_history',['data'=>$data]);
    }
    public function new_vehicule()
    {

        return view('manager/add_vehicule');
    }
    public function new_driver()
    {
        $data['vehicules'] = vehicules::select('id','name','licence')->get();
   
        return view('manager/add_driver',['data' => $data]);
    }




    //POST ROUTES
    public function new_vehicule_post(Request $request)
    {
        $this->validate($request, [
            'vehicule' => ['required','string','max:255'],
            'licence' => ['required','string','max:255'],
        ]);

        $vehicule = new vehicules;
        $vehicule->name = $request->input('vehicule');
        $vehicule->licence = $request->input('licence');
        $vehicule->save();

        $visite = new last_visite;
        $visite->car_id = $vehicule->id;
        $visite->last_date = "en attente";
        $visite->next_date = "en attente";
        $visite->countdown = 0;
        $visite->save();



        return redirect()->back()->with('success','Nouveau véhicule ajouté');
    }

    public function new_driver_post(Request $request)
    {
        $this->validate($request, [
            'nom' => ['required','string','max:255'],
            'contact' => ['required','string','max:255'],
            'email' => ['required','email'],
            'vehicule' => ['required','string'],
        ]);

        $driver = new Driver;
        $driver->name = $request->input('nom');
        $driver->contacts = $request->input('contact');
        $driver->email = $request->input('email');
        $driver->default_password = rand(1000,9999);
        $driver->password = Hash::make($driver->default_password);
        $driver->save();

        $vehicule_driver = new vehicule_driver;
        $vehicule_driver->vehicule_id = $request->input('vehicule');
        $vehicule_driver->driver_id = $driver->id;
        $vehicule_driver->save();


        return redirect()->back()->with('success','Nouveau Chauffeur ajouté');
    }

    public function vehicule_edit_post(Request $request,$id)
    {
        $this->validate($request, [
            'driver' => ['required','string','max:255'],
            'licence' => ['required','string'],
            'vehicule' => ['required','string'],
        ]);

        vehicules::where('id',$id)
         ->update(['name'=> $request->input('vehicule'),'licence'=> $request->input('licence')]);
        
        vehicule_driver::where('vehicule_id',$id)
         ->update(['driver_id'=> $request->input('driver')]);

         return redirect()->back()->with('success','Les détails du vehicule ont été modifiés');
    }

    public function vehicule_recharge_post(Request $request)
    {
        $this->validate($request, [
            'kilometers' => ['required'],
            'date' => ['required'],
            'quantity' => ['nullable'],
            'cost' => ['required'],
            'locality' => ['required'],
            'vehicule' => ['required'],
        ]);

        $recharge = new fuel_recharges;
        $recharge->date = $request->input('date');
        $recharge->car_id = $request->input('vehicule');
        $recharge->quantity = $request->input('quantity');
        $recharge->cost = $request->input('cost');
        $recharge->zone = $request->input('locality');
        $recharge->kilometers = $request->input('kilometers');
        $temp = explode('-',$request->input('date'));
        $recharge->month = $temp[1];
        $recharge->year = $temp[2];
        $recharge->save();

        if (vehicules_months_recharges::where('month',$temp[1])->where('year',$temp[2])->first())
        {
            vehicules_months_recharges::where('month',$temp[1])->where('year',$temp[2])
                ->increment('recharges');
        } 
        else 
        {
     
            $update = new vehicules_months_recharges;
            $update->month = $temp[1];
            $update->year = $temp[2];
            $update->recharges = 1;
            $update->save();
        }
        return redirect()->back()->with('success','La recharge du vehicule a été ajoutée');


    }

    public function parametres_vehicules_post(Request $request)
    {
        $this->validate($request, [
            'office' => ['required'],
            'kilometers' => ['required'],
        ]);

        vehicules_summary::where('id',1)
                ->update(['office'=> $request->input('office'),'next_vidange'=>$request->input('kilometers')]);

        return redirect()->back()->with('success','Les paramètres ont été mis à jour');

    }

    public function car_maintenance_post(Request $request)
    {
        $this->validate($request, [
            'total_cost' => ['required'],
            'date' => ['required'],
            'maintenance_cost' => ['nullable'],
            'items_no' => ['required'],
            'items_changed' => ['required'],
            'items_costs' => ['required'],
            'vehicule' => ['required'],
        ]);

        $car_reparation = new car_maintenances;
        $car_reparation->car_id = $request->input('vehicule');
        $car_reparation->type_id = $request->input('maintenance');
        $car_reparation->date = $request->input('date');
        $car_reparation->total_cost = $request->input('total_cost');
        $car_reparation->maintenance_cost = $request->input('maintenance_cost');
        $car_reparation->items_changed = $request->input('items_no');
        $car_reparation->locality = $request->input('locality');
        $temp = explode('-',$request->input('date'));
        $car_reparation->month = $temp[1];
        $car_reparation->year = $temp[2];
        $car_reparation->save();

        $items = explode(',',$request->input('items_changed'));
        $items_costs = explode(',',$request->input('items_costs'));

        foreach($items as $key => $item)
        {
            $car_reparation_detail = new car_maintenance_details;
            $car_reparation_detail->maintenance_id = $car_reparation->id;
            $car_reparation_detail->item = $item;
            $car_reparation_detail->cost = $items_costs[$key];
            $car_reparation_detail->save();
        }
        if (vehicules_months_maintenances::where('month',$temp[1])->where('year',$temp[2])->first())
        {
            vehicules_months_maintenances::where('month',$temp[1])->where('year',$temp[2])
                ->increment('maintenances');
        } 
        else 
        {
     
            $update = new vehicules_months_maintenances;
            $update->month = $temp[1];
            $update->year = $temp[2];
            $update->maintenances = 1;
            $update->save();
        }

        //if visite-technique
        if( $request->input('maintenance') == 3)
        {

            $origin_date = $request->input('date');
            $origin = date_create($origin_date);
            $target = strtotime($request->input('date'));
            $target = strtotime('+ 1 year', $target);
            $target_date = date('d-m-Y',$target);
            $target = date_create($target_date);
            $interval = date_diff($origin, $target);
            $countdown =  $interval->format('%R%a');

            last_visite::where('car_id',$car_reparation->car_id)
                ->update(['last_date'=> $origin_date,'next_date'=> $target_date,'countdown'=>$countdown]);
        }
        


        return redirect()->back()->with('success','Les détails de la maintenance du vehicule ont été ajoutés');


    }
}
