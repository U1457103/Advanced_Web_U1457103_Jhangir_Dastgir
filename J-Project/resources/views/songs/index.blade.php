@extends('layout')

@section('content')

  <h1>Are They Good? Are They Bad?</h1>

  <p>
   What do you think!!! Click On The Singers And Write Your Comments!!
  </p>

@foreach ($songs as $song)
    <div>
    <a href="/songs/{{ $song->id}}">{{ $song->title }}</a>
    </div>

@endforeach



@stop
