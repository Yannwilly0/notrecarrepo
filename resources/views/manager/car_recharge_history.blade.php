@extends('manager/nav')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="alert text-center h1" role="alert">
         <strong>{{$data['vehicule']->vehicule}} - {{$data['vehicule']->licence}}</strong>
     </div>

    
    <div class="container mt-3">
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
              <a class="nav-link h5" href="{{url('/manager/vehicules/vehicule/'.$data['vehicule']->id)}}">MAINTENANCES</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link h5 active" href="{{url('/manager/vehicules/vehicule/'.$data['vehicule']->id.'/recharges')}}">CARBURANT</a>
            </li>
            
          </ul>

          
    </div>
    <div class="container">
        <table class="table table-striped" id="car">
            <thead>
              <tr>
                <th scope="col">DATE</th>
                <th scope="col">ZONE DE RECHARGEMENT</th>
                <th scope="col">COUT</th>
                <th scope="col">KILOMETRAGE AU RECHARGEMENT</th>
              
              </tr>
            </thead>
            <tbody>
              @foreach ($data['recharges'] as $recharge)
                <tr>
                    <th scope="row">{{$recharge->date}}</th>
                    <td>{{$recharge->zone}}</td>
                    <th>{{$recharge->cost}} FCFA</th>
                    <td>{{$recharge->kilometers}}</td>
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
             "columnDefs": [{ "width": "20%", "targets": 2 }],
                 "language": {
                     "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                 }
         });
 
            
 });
 </script>

@endsection