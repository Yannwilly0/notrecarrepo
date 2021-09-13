@extends('manager/nav')
@section('content')

<div class="container-fluid">
   <div class="container-fluid">
    <div class="alert h1 text-center" role="alert">
        <strong>VEHICULES TOPEX-CI</strong>
    </div>

    <div class="dropdown mb-4">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ajouter
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
       
        <a  class="dropdown-item" href="{{route('manager.vehicule.new')}}" role="button">Vehicule</a>
        <a  class="dropdown-item" href="{{route('manager.driver.new')}}" role="button">Chauffeur</a>
       
      </div>
    </div>

    <table class="table table-striped" id="historique">
        <thead>
          <tr>
            <th scope="col">IMMATRICULATION</th>
            <th scope="col">VEHICULE</th>
            <th scope="col">CHAUFFEUR</th>
            <th scope="col">CONTACT</th>
            <th scope="col">DOSSIER</th>
            <th scope="col">EDITER</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data['vehicules'] as $vehicule)
            <tr>
              <td>{{$vehicule->licence}}</td>
              <td>{{$vehicule->vehicule}}</td>
              <td>{{$vehicule->driver}}</td>
              <td>{{$vehicule->contact}}</td>
              <td><a href="{{url('/manager/vehicules/vehicule/'.$vehicule->vehicule_id)}}"><img src="https://img.icons8.com/emoji/30/000000/card-index-dividers-emoji.png"/></a></td>
              <td><a href="{{url('/manager/vehicules/vehicule/'.$vehicule->vehicule_id.'/edit')}}"><img src="https://img.icons8.com/material-outlined/20/000000/edit.png"/></a></td>
            </tr>
          @endforeach
         
        </tbody>
      </table>
   </div>
</div>

<script type="text/javascript">
   
    $(document).ready(function(){
      
     
     var table = $('#historique').DataTable({ 
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