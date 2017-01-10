@extends('layout')

@section('content')
<<<<<<< HEAD
=======

>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
<div class="row">



  <div class="col-md-6 col-md-offset-3">



  <h1>{{$song->title}}</h1>


<ul class="list-group">
@foreach ($song->notes as $note)
  <li class="list-group-item">
    {{ $note->body }}
<<<<<<< HEAD
    <a href='#' class="pull-right">{{ $note->user->name }}</a>
=======
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
  </li>
@endforeach

</ul>

<h2>What do you think of this singer?</h2>

<form method="POST" action="/songs/{{ $song->id }}/notes">
{{csrf_field()}}
<div class="form-group">
<textarea name="body" class="form-control"></textarea>
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary">Add Comment</button>
</div>
</form>

<<<<<<< HEAD
@if (count($errors))
  <ul>
    @foreach ($errors->all() as $error)
      <li>
         {{ $error }}
      </li>
@endforeach
  </ul>


@endif
=======
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa


  </div>
</div>

<<<<<<< HEAD
=======


  <h1>{{$song->title}}</h1>


>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
@stop
