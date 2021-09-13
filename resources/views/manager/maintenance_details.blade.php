@extends('manager/nav')
@section('content')
 <div class="container-fluid">
     <button type="button" class="btn btn-secondary" onclick="window.history.go(-1)"> <- RETOUR</button>
 </div>
<div class="container py-4">
    <div class="card">
        <h5 class="card-header text-center">{{$data['maintenance']->vehicule}} - {{$data['maintenance']->licence}}</h5>
        <div class="card-body">
          <h5 class="card-title">{{$data['maintenance']->type}}</h5>
          <h5 class="card-title"> {{$data['maintenance']->date}}</h5>
          <hr>
          @foreach ($data['details'] as $detail)
          <p class="card-text">{{$detail->item}} => {{$detail->cost}} FCFA</p>
          @endforeach
          <p class="card-text">MAIN D'OEUVRE: {{$data['maintenance']->maintenance_cost}} FCFA</p>
          <hr>
          <h5 class="card-title text-right">TOTAL: {{$data['maintenance']->total_cost}} FCFA</h5>
        </div>
      </div>
</div>
@endsection