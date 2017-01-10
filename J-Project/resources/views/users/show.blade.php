@extends('layout')

@section('content')

  <h1>{{$user->name}}</h1>

<<<<<<< HEAD
<ul class="list-group">
@foreach ($user->details as $detail)

<li class="list-group-item">
=======
<ul>
@foreach ($user->details as $detail)

<li>
>>>>>>> 925cbf206bd770de54b474b29415fe60e128064f
  {{$detail->body}}
</li>

@endforeach

</ul>


@stop
