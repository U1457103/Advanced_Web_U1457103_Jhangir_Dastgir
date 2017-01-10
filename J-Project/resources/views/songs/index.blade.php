@extends('layout')

@section('content')

  <h1>Rate The Artists</h1>

  @foreach ($songs as $song)
    <div>
          <a href="/songs/{{ $song->id}}">{{ $song->title }}</a>
    </div>

  @endforeach

@stop
