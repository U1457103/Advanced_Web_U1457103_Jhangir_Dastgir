@extends('layout')

@section('content')

  <h1>{{$user->name}}</h1>

<<<<<<< HEAD
=======

>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
<ul class="list-group">
@foreach ($user->details as $detail)

<li class="list-group-item">
<<<<<<< HEAD
=======

<ul>
@foreach ($user->details as $detail)

<li>

>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
  {{$detail->body}}
</li>

@endforeach

</ul>


@stop
