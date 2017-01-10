@extends('layout')

@section('content')


<div class="row">



  <div class="col-md-6 col-md-offset-3">



  <h1>{{$song->title}}</h1>


<ul class="list-group">
@foreach ($song->notes as $note)
  <li class="list-group-item">
    {{ $note->body }}

<<<<<<< HEAD
    <a href='#' class="pull-right">{{ $note->user->name }}</a>


    <a href="/notes/{{ $note->id}}>{{ $note->id }}/edit" class="pull-right">{{ $note->user->name }}</a>

=======
    <a href="/notes/{{ $note->id}}>{{ $note->id }}/edit" class="pull-right">{{ $note->user->name }}</a>

    <a href='#' class="pull-right">{{ $note->user->name }}</a>


>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
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


@if (count($errors))
  <ul>
    @foreach ($errors->all() as $error)
      <li>
         {{ $error }}
      </li>
@endforeach
  </ul>
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e

@endif


<<<<<<< HEAD
@endif
=======

@endif


>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e


  </div>
</div>




  <h1>{{$song->title}}</h1>


<<<<<<< HEAD

=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
@stop
