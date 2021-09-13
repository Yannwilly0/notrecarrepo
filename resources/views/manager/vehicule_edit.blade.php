@extends('manager/nav')
@section('content')


<div class="container py-3">
    <div class="row">
      <div class="col-md-10"> 
        <h2 class="text-center mb-3">{{$data['vehicule']->vehicule}}</h2>

        <hr class="mb-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <span class="anchor" id="formLogin"></span> 
						<!-- form card login -->
            <div class="card card-outline-secondary">
              
              <div class="card-body">
                <form autocomplete="off" class="form" role="form" method="POST" action="{{url('/manager/vehicules/vehicule/'.$data['vehicule']->vehicule_id.'/edit')}}">
                   @csrf
                  <div class="form-group">
                    <label for="uname1">VEHICULE</label> 
					          	<input class="form-control" name="vehicule" required  type="text" value="{{$data['vehicule']->vehicule}}">
                  </div>
                  
                  <div class="form-group">
                    <label>IMMATRICULATION</label> 
						          <input class="form-control" name="licence"  required type="text" value="{{$data['vehicule']->licence}}">
                  </div>
                  <div class="form-group">
                    <label>CHAUFFEUR</label> 
                      <select name="driver" required class="form-control">
                          @foreach ($data['drivers'] as $driver)
                            <option {{$data['vehicule']->driver_id == $driver->driver_id ?'selected':''}} value="{{$driver->driver_id}}">{{$driver->name}}</option>
                          @endforeach
                      </select>
                  </div>
                  
                  </div>
						<button class="btn btn-success form-control btn-lg float-right" type="submit">SAUVEGARDER</button>
                </form>
              </div><!--/card-block-->
            </div><!-- /form card login -->
          </div>
        </div>

@endsection