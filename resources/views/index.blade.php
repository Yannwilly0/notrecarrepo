<!doctype html>
<html lang="en">
  <head>
    <title>TOPEX-CI - Index</title>
    <link rel="icon" href="{{asset('images/logo-topex-ci.png')}}"/>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-2 d-none d-sm-block">
                <img src="{{ asset('images/user_ride.svg') }}" width="600" height="620" class="responsive" alt="">
            </div>
            <div class="col-md-6 xs-12">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12 py-5 mt-5">
                            <div class="col-md-12 mt-2">
                                <div class="alert h3 text-center" role="alert">
                                    <strong>ESPACE DE CONNEXION</strong>
                                </div>
                                <hr>
                            </div>
                           <div class="col-md-12 mt-4">
                                 <a class="btn btn-info form-control" href="#" role="button">UTILISATEUR</a>
                           </div>
                           <div class="col-md-12 mt-4">
                                <a class="btn btn-secondary form-control" href="#" role="button">CHAUFFEUR</a>
                            </div>
                            <div class="col-md-12 mt-4">
                                <a  class="btn btn-dark form-control" href="{{route('manager.index')}}" role="button">GESTIONNAIRE</a>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
            
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>