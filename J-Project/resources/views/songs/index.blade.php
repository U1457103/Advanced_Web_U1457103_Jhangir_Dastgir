@extends('layout')

@section('content')

  <h1>All Songs</h1>

  @foreach ($songs as $song)
    <div>
<<<<<<< HEAD
          <a href="/songs/{{ $song->id}}">{{ $song->title }}</a>
    </div>

=======
      {{ $song->title}}

    </div>
>>>>>>> 925cbf206bd770de54b474b29415fe60e128064f
  @endforeach

@stop
