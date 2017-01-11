@extends('layout')

@section('content')

  <h1>{{$user->name}}</h1>

<ul class="list-group">
@foreach ($user->details as $detail)

<li class="list-group-item">
  {{$detail->body}}
</li>

@endforeach

</ul>


@stop
