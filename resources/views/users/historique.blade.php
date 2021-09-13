@extends('users/nav')
@section('content')

<div class="container">
    <div class="alert h1 text-center" role="alert">
        <strong>DEMANDES DE COURSES</strong>
    </div>
    <table class="table table-striped" id="historique">
        <thead>
          <tr>
            <th scope="col">DATE</th>
            <th scope="col">POINT DE DEPART</th>
            <th scope="col">POINT D'ARRIVE</th>
            <th scope="col">STATUT</th>
            <th scope="col">DETAILS</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Mark</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Mark</td>
          </tr>
        </tbody>
      </table>
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