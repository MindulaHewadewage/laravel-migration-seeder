@extends('layouts.main')
@section('title','Home')


@section('content')
<h1>Trains</h1>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        @foreach($trains as $train)
        <p class="card-text"><strong>Company:</strong>{{$train->company}}</p>
      <p class="card-text"><strong>From:</strong>{{$train->from}}</p>
      <p class="card-text"><strong>To:</strong>{{$train->to}}</p>
      <p class="card-text"><strong>Departure:</strong>{{$train->departure}}</p>
      <p class="card-text"><strong>Arrive:</strong>{{$train->arrive}}</p>
      <p class="card-text"><strong>Pnr:</strong>{{$train->pnr}}</p>
      <p class="card-text"><strong>Coaches:</strong>{{$train->coaches}}</p>
      <p class="card-text"><strong>In Time:</strong>{{$train->in_time}}</p>
      <p class="card-text"><strong>In Cancelled:</strong>{{$train->is_cancelled}}</p>
      @endforeach
    </div>
  </div>
@endsection