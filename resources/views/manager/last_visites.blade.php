@extends('manager/nav')
@section('content')

<div class="container-fluid">
   <div class="container-fluid">
    <div class="alert h1 text-center" role="alert">
        <strong>VEHICULES TOPEX-CI VISITE-TECHNIQUE</strong>
    </div>
    <a class="btn btn-secondary m-2" href="{{route('manager.vehicules.visites.update')}}" role="button">METTRE A JOUR</a>

    <table class="table table-striped" id="historique">
        <thead>
          <tr>
            <th scope="col">IMMATRICULATION</th>
            <th scope="col">VEHICULE</th>
            <th scope="col">CHAUFFEUR</th>
            <th scope="col">DERNIERE VISITE</th>
            <th scope="col">PROCHAINE VISITE</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($data['visites'] as $vehicule)
            <tr>
              <td>{{$vehicule->licence}}</td>
              <td>{{$vehicule->vehicule}}</td>
              <td>{{$vehicule->driver}}</td>
              <td class="text-center ">{{$vehicule->last_date}}</td>
              <td class="text-center {{$vehicule->countdown <=7 ? 'text-danger' : ''}}">{{$vehicule->next_date}}</td>
               
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