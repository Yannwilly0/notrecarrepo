<!doctype html>
<html lang="en">
  <head>
    <title>TOPEX-CI - CARS MANAGER</title>
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
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand" style="background-color: #fff;">
        <a class="h3 text-secondary mt-3 text-decoration-none" href="{{route('manager.index')}}"> <img src="{{ asset('images/logo-topex-ci.png') }}" alt="logo" height="60" width="120"> </a>
        <button class="btn  btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fa fa-bars fa-2x"></i></button>
        <!-- Navbar Search-->
        
        <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></div>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0 mb-3" style="background-color: #fff;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-secondary" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                   
                <a class="dropdown-item" href=""><i class="fa fa-lock" aria-hidden="true"></i> mot de passe</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Se deconnecter') }}
                </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark " id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!--
                    <div class="sb-sidenav-menu-heading">NOTIFICATIONS</div>  
    
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"> <img src="https://img.icons8.com/emoji/30/000000/bell-emoji.png"/> </div>
                                    Notifications <span class="badge badge-danger ml-2"> 0</span>
                        </a>
                        
                        
                    -->    
                                
                        <div class="sb-sidenav-menu-heading">VEHICULES</div>
                        <a class="nav-link" href="{{route('manager.vehicules')}}">
                            <div class="sb-nav-link-icon"> <img src="https://img.icons8.com/office/30/000000/car.png"/> </div>
                            Vehicules
                        </a>
                        <a class="nav-link" href="{{route('manager.recharge')}}">
                            <div class="sb-nav-link-icon">  <img src="https://img.icons8.com/emoji/30/000000/fuel-pump.png"/> </div>
                           Carburant
                        </a>
                        <a class="nav-link" href="{{route('manager.maintenance')}}">
                            <div class="sb-nav-link-icon">  <img src="https://img.icons8.com/color/30/000000/car-service.png"/> </div>
                            Maintenance
                        </a>
                  
                        
                        <div class="sb-sidenav-menu-heading">PARAMETRES</div>
                        
                        <a class="nav-link" href="{{route('manager.vehicules.settings')}}">
                            <div class="sb-nav-link-icon"> <img src="https://img.icons8.com/doodle/30/000000/apple-settings.png"/> </div>
                            Configuration
                        </a>
                        <div class="sb-sidenav-menu-heading">NOTIFICATIONS</div>  
    
                        <a class="nav-link" href="{{route('manager.vehicules.visites')}}">
                            <div class="sb-nav-link-icon"><img src="https://img.icons8.com/ios/30/000000/calendar-delete.png"/> </div>
                                    Visite-Technique 
                        </a>
                               
                                    
                       


                    </div>

                        </div>
                        
                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as: {{ Auth::user()->name }}</div>
                            
                        </div>
            </nav>
        </div>
        
        <div id="layoutSidenav_content">
            <main>
                <div class="mt-3 m-2">
                    <div class="container-fluid">
                        @include('layouts.messages')
                    </div>
                   @yield('content')
                </div>       
       
        
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy;  2021</div>
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
   
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap',
            format: 'dd-mm-yyyy'
        });
    </script>
    

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 

   
  </body>

</html>