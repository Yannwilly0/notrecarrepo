@extends('users/nav')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/user_ride.svg') }}" width="600" height="500" class="responsive" alt="">
        </div>
        <div class="col-md-4 mt-5 ml-5 justify-content-center">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                        <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Reservation de voiture
                        </button>
                        </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                        </div>
                    </div>
                    </div>
                    <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <img src="https://img.icons8.com/office/20/000000/car.png"/> Demande de voiture
                        </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        Some placeholder content for the second accordion panel. This panel is hidden by default.
                        </div>
                    </div>
                    </div>
                    <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <img src="https://img.icons8.com/office/20/000000/archive-folder.png"/> Historique
                        </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                        And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</div>
   
@endsection