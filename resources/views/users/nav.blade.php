<!doctype html>
<html lang="en">
  <head>
    <title>TOPEX-CI - utilisateurs home</title>
    <link rel="icon" href="{{asset('images/logo-topex-ci.png')}}"/>
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
    
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('user.index')}}"><img src="{{ asset('images/logo-topex-ci.png') }}" width="120" height="60" class="d-inline-block align-top" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link h5" href="{{route('user.ride.request')}}"> <img src="https://img.icons8.com/office/30/000000/car.png"/> Demande de course </a>
                </li>
                <li class="nav-item">
                <a class="nav-link h5"  href="{{route('user.historique')}}"><img src="https://img.icons8.com/office/30/000000/archive-folder.png"/> Historique</a>
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