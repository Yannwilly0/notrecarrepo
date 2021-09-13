@extends('manager/nav')
@section('content')


<div class="container">
    <div class="row">
      <div class="col-md-10"> 
        <h2 class="text-center mb-3">FORMULAIRE DE RECHARGE CARBURANT</h2>

        <hr class="mb-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <span class="anchor" id="formLogin"></span> 
						<!-- form card login -->
            <div class="card card-outline-secondary">
              
              <div class="card-body">
                <form autocomplete="off" class="form" method="POST" action="{{route('manager.recharge')}}">
                    @csrf
                  <div class="form-group">
                    <label for="uname1">DATE</label> 
						          <input class="form-control" name="date" id="datepicker" required type="text"> 
                  </div>
                  <div class="form-group">
                    <label>VEHICULE</label> 
                    <select  class="form-control" name="vehicule" required>
                      @foreach ($data['vehicules'] as $vehicule)
                          <option value="{{$vehicule->id}}">{{$vehicule->name}} - {{$vehicule->licence}}</option>
                      @endforeach

                    
                  </select>
                  </div>
                  <div class="form-group">
                    <label>CARBURANT QTE EN LITRE</label> 
						            <input class="form-control"  name="quantity" type="number" step="0.01">
                  </div>
                  <div class="form-group">
                    <label>COUT DU CARBURANT</label> 
						            <input class="form-control" name="cost"  required type="number" step="0.01">
                  </div>
                  <div class="form-group">
                    <label>KILOMETRAGE AU RECHARGEMENT</label> 
                         <input class="form-control" name="kilometers" required type="number" step="0.01">
                  </div>
                  <div class="form-group">
                    <label>LOCALITE</label> 
                         <input class="form-control" name="locality"  required type="text">
                  </div>
                  
                  </div>
						        <button class="btn btn-success form-control btn-lg float-right" type="submit">SAUVEGARDER</button>
                </form>
              </div><!--/card-block-->
            </div><!-- /form card login -->
          </div>
        </div>

@endsection