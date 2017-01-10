@extends('layout')

@section('content')

  <h1>{{$user->name}}</h1>


<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
<ul class="list-group">
@foreach ($user->details as $detail)

<li class="list-group-item">
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e

<ul>
@foreach ($user->details as $detail)

<li>

<<<<<<< HEAD


=======
<<<<<<< HEAD
=======


>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
  {{$detail->body}}
</li>

@endforeach

</ul>


@stop
