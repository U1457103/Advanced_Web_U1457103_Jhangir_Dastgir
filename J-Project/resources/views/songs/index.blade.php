@extends('layout')

@section('content')


  <h1>Rate The Artists</h1>

  @foreach ($songs as $song)
    <div>
          <a href="/songs/{{ $song->id}}">{{ $song->title }}</a>
    </div>


  <h1>All Songs</h1>

  @foreach ($songs as $song)
    <div>

          <a href="/songs/{{ $song->id}}">{{ $song->title }}</a>
    </div>


      {{ $song->title}}

    </div>

  @endforeach

@stop
