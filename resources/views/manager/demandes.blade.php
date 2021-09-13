@extends('manager/nav')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
    <div class="row text-white justify-content-center">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-c-blue  shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                COURSES</div>
                            <div class="h1 mb-0 font-weight-bold ">2</div>
                        </div>
                        <div class="col-auto">
                            <img src="https://img.icons8.com/fluent/70/000000/traffic-jam.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-c-pink shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold t text-uppercase mb-1">
                                HORS-SERVICES</div>
                            <div class="h1 mb-0 font-weight-bold ">3</div>
                        </div>
                        <div class="col-auto">
                            <img src="https://img.icons8.com/color/70/000000/car-service.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-c-green shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold t text-uppercase mb-1">
                                DISPONIBLES</div>
                            <div class="h1 mb-0 font-weight-bold ">4</div>
                        </div>
                        
                        <div class="col-auto">
                            <img src="https://img.icons8.com/fluent/70/000000/car-rental.png"/>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="container">
    <div class="alert h1 text-center" role="alert">
        <strong>DEMANDES DE COURSES</strong>
    </div>
    <div class="py-3">
       
        <table id="cars" class="display" cellspacing="0" width="100%">
            <thead>
                <tr style="height: 50px;">

                    <th>DATE</th>
                    <th>DEMANDEUR</th>
                    <th>DEPART</th>
                    <th>ARRIVE</th>
                    <th>MODE</th>
                    <th>ACTION</th>
                    
                </tr>
            </thead>
    
            <tbody>
                
                    <tr style="height: 50px;">
                        <td class="p-3 ">ZXV4764C</td>
                        <td class="p-3 ">TRAORE ZANA</td>
                        <td class="p-3 "><a href="">TOYOTA YARIS</a></td>
                        <td class="p-3 text-success">Libre</td>
                        <td class="p-3 "><a href="">TOYOTA YARIS</a></td>
                        <td class="p-3 text-success">Libre</td>
                    </tr> 
                
                
                
            </tbody>
        </table>
    </div>
   </div>
</div>
<script type="text/javascript">
   
    $(document).ready(function(){
      
     
     var table = $('#cars').DataTable({ 
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