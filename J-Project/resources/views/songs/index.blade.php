@extends('layout')

@section('content')

<<<<<<< HEAD
  <h1>Rate The Artists</h1>

  @foreach ($songs as $song)
    <div>
          <a href="/songs/{{ $song->id}}">{{ $song->title }}</a>
    </div>

=======
  <h1>All Songs</h1>

  @foreach ($songs as $song)
    <div>

          <a href="/songs/{{ $song->id}}">{{ $song->title }}</a>
    </div>


      {{ $song->title}}

    </div>

>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
  @endforeach

@stop
