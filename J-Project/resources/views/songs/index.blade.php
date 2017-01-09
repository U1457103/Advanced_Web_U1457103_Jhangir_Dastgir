@extends('layout')

@section('content')

  <h1>All Songs</h1>

  @foreach ($songs as $song)
    <div>
      {{ $song->title}}

    </div>
  @endforeach

@stop
