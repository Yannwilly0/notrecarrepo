<!doctype html>
<html lang="en">
  <head>
    <title>TOPEX-CI - Manager home</title>
    <link rel="icon" href="{{asset('images/logo-topex-ci.png')}}" sizes="32x32"/>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
           
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('manager.index')}}"><img src="{{ asset('images/logo-topex-ci.png') }}" width="120" height="60" class="d-inline-block align-top" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               
                <li class="nav-item">
                    <a class="nav-link h5"  href="{{route('manager.vehicules')}}"><img src="https://img.icons8.com/office/30/000000/car.png"/> vehicules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h5"  href="{{route('manager.recharge')}}"> <img src="https://img.icons8.com/emoji/30/000000/fuel-pump.png"/> Carburant</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle h5" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://img.icons8.com/color/30/000000/car-service.png"/> Maintenance
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{route('manager.maintenance.entretien')}}">Entretien</a>
                      <hr>
                      <a class="dropdown-item" href="{{route('manager.maintenance.reparation')}}">Reparation</a>
                     
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link h5" href="{{route('manager.demandes')}}"> <span class="badge badge-danger">0</span><img src="https://img.icons8.com/emoji/30/000000/bell-emoji.png"/> Notifications </a>
                   </li>
                
            </ul>
            </div>
        </nav>
        <main>
            <div class="mt-3 m-2">
                <div class="container">
                    @include('layouts.messages')
                </div>
               @yield('content')
            </div>       
   
    
        </main>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 

   
  </body>

</html>