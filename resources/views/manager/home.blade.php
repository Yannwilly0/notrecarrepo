@extends('manager/nav')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <div class="row text-white justify-content-center">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-c-blue  shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                BUREAU</div>
                            <div class="h1 mb-0 font-weight-bold ">{{$data['office']->office}}</div>
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
                                RECHARGES</div>
                            <div class="h1 mb-0 font-weight-bold ">{{$data['recharges']}}</div>
                        </div>
                        <div class="col-auto">
                            <img src="https://img.icons8.com/office/70/000000/gas-pump.png"/>
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
                                MAINTENANCES</div>
                            <div class="h1 mb-0 font-weight-bold ">{{$data['maintenances']}}</div>
                        </div>
                        
                        <div class="col-auto">
                            <img src="https://img.icons8.com/color/70/000000/car-service.png"/>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    
    <div class="container-fluid">
        <canvas id="line-chart" width="1000" height="350"></canvas>
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
  <script>
      var months = <?php echo json_encode($data['months']);  ?>;
      var months_recharges = <?php echo json_encode($data['months_recharges']);  ?>;
      months_recharges.push(100);
 new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: months,
    datasets: [ { 
        data: months_recharges,
        label: "Carburant",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Courbe de recharge carburant'
    }
  }
});
 </script>
@endsection