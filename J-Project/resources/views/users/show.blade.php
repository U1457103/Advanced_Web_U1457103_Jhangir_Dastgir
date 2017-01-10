@extends('layout')

@section('content')

  <h1>{{$user->name}}</h1>


<<<<<<< HEAD
=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
<ul class="list-group">
@foreach ($user->details as $detail)

<li class="list-group-item">
<<<<<<< HEAD

=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e

<ul>
@foreach ($user->details as $detail)

<li>

<<<<<<< HEAD
=======


>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
  {{$detail->body}}
</li>

@endforeach

</ul>


@stop
