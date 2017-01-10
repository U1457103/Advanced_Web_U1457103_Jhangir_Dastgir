@extends('layout')

@section('content')

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
  <h1>Rate The Artists</h1>

  @foreach ($songs as $song)
    <div>
          <a href="/songs/{{ $song->id}}">{{ $song->title }}</a>
    </div>

<<<<<<< HEAD
=======
=======

>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
  <h1>All Songs</h1>

  @foreach ($songs as $song)
    <div>

          <a href="/songs/{{ $song->id}}">{{ $song->title }}</a>
    </div>


      {{ $song->title}}

    </div>

<<<<<<< HEAD
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
=======

>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
  @endforeach

@stop
