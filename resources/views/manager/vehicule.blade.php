@extends('manager/nav')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="alert text-center h1 " role="alert">
         <strong>{{$data['vehicule']->vehicule}} - {{$data['vehicule']->licence}}</strong>
     </div>
   

   
    <div class="container mt-3">
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
              <a class="nav-link active h5" href="{{url('/manager/vehicules/vehicule/'.$data['vehicule']->id)}}">MAINTENANCES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h5" href="{{url('/manager/vehicules/vehicule/'.$data['vehicule']->id.'/recharges')}}">CARBURANT</a>
            </li>
            <!--
            <li class="nav-item">
                <div class="button-switch">
                    <input type="checkbox" id="switch-orange" class="switch" />
                    <label for="switch-orange" class="lbl-off">Off</label>
                    <label for="switch-orange" class="lbl-on">On</label>
                  </div>
                  
            </li>
        -->
          </ul>

          <table class="table table-striped" id="car">
            <thead>
              <tr>
                <th scope="col">DATE</th>
                <th scope="col">TYPE</th>
                <th scope="col">PIECES CHANGEES</th>
                <th scope="col-5">COUT DE LA MAINTENANCE</th>
                <th scope="col">LOCALITE</th>
                <th scope="col">DETAILS</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data['maintenances'] as $maintenance)
                <tr>
                        <th>{{$maintenance->date}}</th>
                        <td>{{$maintenance->type}}</td>
                        <td class="text-center">{{$maintenance->items_changed}}</td>
                        <th class="text-center">{{$maintenance->total_cost}}</th>
                        <td>{{$maintenance->locality}}</td>
                        <td><a href="{{url('/manager/vehicules/maintenance/'.$maintenance->id.'/details')}}"><img src="https://img.icons8.com/emoji/30/000000/card-index-dividers-emoji.png"/></a></td>
                        
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
   
  
</div>
<script type="text/javascript">
   
    $(document).ready(function(){
      
     
     var table = $('#car').DataTable({ 
                 select: false,
             "iDisplayLength": 50, 
             
                 "language": {
                     "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                 }
         });
 
            
 });
 </script>

@endsection