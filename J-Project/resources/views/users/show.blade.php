@extends('layout')

@section('content')

  <h1>{{$user->name}}</h1>

<ul>
@foreach ($user->details as $detail)

<li>
  {{$detail->body}}
</li>

@endforeach

</ul>


@stop
