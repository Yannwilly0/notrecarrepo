@extends('manager/nav')
@section('content')


<div class="container-fluid py-3">
    <div class="row">
      <div class="col-md-10"> 
        <h2 class="text-center mb-3">FORMULAIRE D'ENTRETIEN DE VEHICULE</h2>

        <hr class="mb-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <span class="anchor" id="formLogin"></span> 
						<!-- form card login -->
            <div class="card card-outline-secondary">
              
              <div class="card-body">
                <form autocomplete="off" class="form" id="formLogin" name="formLogin" role="form">
                  <div class="form-group">
                    <label for="uname1">DATE</label> 
						<input class="form-control" name="date" required type="text">
                  </div>
                  <div class="form-group">
                    <label>VEHICULE</label> 
						        <select name="type" class="form-control">
                      <option value="simple">TOYOTA LUX</option>
                      <option value="round">PEUGEOT 407</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label>TYPE</label> 
						        <select name="type" class="form-control">
                      <option value="simple">VIDANGE</option>
                      <option value="round">VISITE TECHNIQUE</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label>COUT</label> 
						          <input class="form-control"  required type="number">
                  </div>
                
					<button class="btn btn-success btn-lg form-control float-right" type="submit">SAUVEGARDER</button>
                </form>
              </div><!--/card-block-->
            </div><!-- /form card login -->
          </div>
        </div>

@endsection