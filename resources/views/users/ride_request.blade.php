@extends('users/nav')
@section('content')


<div class="container py-3">
    <div class="row">
      <div class="col-md-10"> 
        <h2 class="text-center mb-3">FORMULAIRE DE DEMANDE DE COURSE</h2>

        <hr class="mb-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <span class="anchor" id="formLogin"></span> 
						<!-- form card login -->
            <div class="card card-outline-secondary">
              <div class="card-header">
                <p class="mb-0 text-danger"> * Le champ de nom ne peut être modifié</p>
              </div>
              <div class="card-body">
                <form autocomplete="off" class="form" id="formLogin" name="formLogin" role="form">
                  <div class="form-group">
                    <label for="uname1">DATE</label> 
						<input class="form-control" name="date" required type="text" value="{{$data['date']}}">
                  </div>
                  <div class="form-group">
                    <label>DEMANDEUR</label> 
						<input class="form-control"  required type="text" value="{{$data['user']}}" readonly>
                  </div>
                  <div class="form-group">
                    <label>POINT DE DEPART</label> 
						<input class="form-control"  required type="text" value="{{$data['depart']}}">
                  </div>
                  <div class="form-group">
                    <label>POINT D'ARRIVE</label> 
						        <input class="form-control"  required type="text">
                  </div>
                  <div class="form-group">
                    <label>MODE DE TRAJET</label> 
						        <select name="type" class="form-control">
                      <option value="simple">Aller simple</option>
                      <option value="round"> Aller-retour</option>
                    </select>
                  </div>
                  
                  </div>
						<button class="btn btn-success btn-lg float-right" type="submit">ENVOYER</button>
                </form>
              </div><!--/card-block-->
            </div><!-- /form card login -->
          </div>
        </div>

@endsection