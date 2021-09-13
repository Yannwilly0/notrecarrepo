@extends('manager/nav')
@section('content')


<div class="container py-3">
    <div class="row">
      <div class="col-md-10"> 
        <h2 class="text-center mb-3">AJOUTER UN NOUVEAU CHAUFFEUR</h2>

        <hr class="mb-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <span class="anchor" id="formLogin"></span> 
						<!-- form card login -->
            <div class="card card-outline-secondary">
              
              <div class="card-body">
                <form autocomplete="off" class="form"  role="form" method="POST" action="{{route('manager.driver.new')}}">
                    @csrf
                  <div class="form-group">
                    <label for="uname1">NOM</label> 
						<input class="form-control" name="nom" required type="text" placeholder="NOM COMPLET">
                  </div>
                  <div class="form-group">
                    <label for="uname1">EMAIL</label> 
						<input class="form-control" name="email" required type="email" placeholder="ADDRESSE E-MAIL">
                  </div>
                  <div class="form-group">
                    <label for="uname1">CONTACT</label> 
						<input class="form-control" name="contact" required type="text" placeholder="NUMERO DE TELEPHONE">
                  </div>
                  <div class="form-group">
                    <label>VEHICULE</label> 
					          <select  class="form-control" name="vehicule" required>
                        @foreach ($data['vehicules'] as $vehicule)
                            <option value="{{$vehicule->id}}">{{$vehicule->name}} - {{$vehicule->licence}}</option>
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