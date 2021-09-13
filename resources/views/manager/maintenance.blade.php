@extends('manager/nav')
@section('content')


<div class="container py-3">
    <div class="row">
      <div class="col-md-10"> 
        <h2 class="text-center mb-3">FORMULAIRE DE REPARATION DE VEHICULE</h2>

        <hr class="mb-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <span class="anchor" id="formLogin"></span> 
						<!-- form card login -->
            <div class="card card-outline-secondary">
              
              <div class="card-body">
                <form autocomplete="off" class="form" method="POST" action="{{route('manager.maintenance')}}">
                   @csrf
                   <div class="form-group">
                    <label for="uname1">DATE</label> 
						          <input class="form-control" name="date" id="datepicker" required type="text"> 
                  </div>
                  <div class="form-group">
                    <label>NATURE DE LA MAINTENANCE</label> 
                    <select  class="form-control" name="maintenance" required>
                      @foreach ($data['maintenances'] as $maintenance)
                          <option value="{{$maintenance->id}}">{{$maintenance->type}}</option>
                      @endforeach
                    </select>
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
                    <label>LOCALITE</label> 
						          <input class="form-control"  required type="text"  name="locality">
                  </div>
                  <div class="form-group">
                    <label>NOMBRE DE PIECES CHANGEES</label> 
						          <input class="form-control"  required  name="items_no"  type="number">
                  </div>
                  <div class="form-group">
                    <label>COUT TOTAL</label> 
						          <input class="form-control"  required  type="number" step="0.01" name="total_cost">
                  </div>
                  <div class="form-group">
                    <label>PIECES CHANGEES</label> 
						          <input class="form-control"  required type="text" placeholder="liste des pièces séparées par des virgules" name="items_changed">
                  </div>
                  <div class="form-group">
                    <label>COUT DES PIECES</label> 
						          <input class="form-control"  required type="text" placeholder="coût des pièces séparées par des virgules" name="items_costs">
                  </div>
                  <div class="form-group">
                    <label>COUT DE LA MAINTENANCE</label> 
						          <input class="form-control"  required  type="number" step="0.01" name="maintenance_cost">
                  </div>
                  
                
					<button class="btn btn-success btn-lg form-control float-right" type="submit">SAUVEGARDER</button>
                </form>
              </div><!--/card-block-->
            </div><!-- /form card login -->
          </div>
        </div>

@endsection