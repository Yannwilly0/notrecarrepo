@extends('manager/nav')
@section('content')


<div class="container py-3">
    <div class="row">
      <div class="col-md-10"> 
        <h2 class="text-center mb-3">AJOUTER UN NOUVEAU VEHICULE</h2>

        <hr class="mb-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <span class="anchor" id="formLogin"></span> 
						<!-- form card login -->
            <div class="card card-outline-secondary">
              
              <div class="card-body">
                <form autocomplete="off" class="form"  role="form" method="POST" action="{{route('manager.vehicule.new')}}">
                    @csrf
                  <div class="form-group">
                    <label for="uname1">VEHICULE</label> 
						<input class="form-control" name="vehicule" required type="text" placeholder="MODEL DU VEHICULE">
                  </div>
                  <div class="form-group">
                    <label for="uname1">IMMATRICULATION</label> 
						<input class="form-control" name="licence" required type="text" placeholder="NUMERO D'IMMATRICULATION">
                  </div>
                
                  </div>
						<button class="btn btn-success form-control btn-lg float-right" type="submit">SAUVEGARDER</button>
                </form>
              </div><!--/card-block-->
            </div><!-- /form card login -->
          </div>
        </div>

@endsection