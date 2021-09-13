@extends('manager/nav')
@section('content')


<div class="container">
    <div class="row">
      <div class="col-md-10"> 
        <h2 class="text-center mb-3">GESTION DES VEHICULES</h2>

        <hr class="mb-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <span class="anchor" id="formLogin"></span> 
						<!-- form card login -->
            <div class="card card-outline-secondary">
              
              <div class="card-body">
                <form autocomplete="off" class="form" method="POST" action="{{route('manager.vehicules.settings')}}">
                    @csrf
                  <div class="form-group">
                    <label for="uname1">VEHICULES DE BUREAU</label> 
						<input class="form-control" name="office" required type="number" value="{{$data['settings']->office}}"> 
                  </div>
                  
                  <div class="form-group">
                    <label>KILOMETRES AVANT VIDANGE</label> 
						<input class="form-control"  name="kilometers" required type="number" value="{{$data['settings']->next_vidange}}">
                  </div>
                  
                  </div>
					<button class="btn btn-success form-control btn-lg float-right" type="submit">SAUVEGARDER</button>
                </form>
              </div><!--/card-block-->
            </div><!-- /form card login -->
          </div>
        </div>

@endsection