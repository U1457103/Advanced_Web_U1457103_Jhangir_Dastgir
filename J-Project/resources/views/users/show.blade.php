
@extends('layout')

@section('content')

  <h1>Details of the users</h1>


@foreach ($details as $detail)
  <div>
    {{$detail->body}}
  </div>
@endforeach


@stop
