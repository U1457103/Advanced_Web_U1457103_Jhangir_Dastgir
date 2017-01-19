@extends('layout')

@section('content')

  <div class="row">
  <div class="col-md-6 col-md-offset-3">
  <h1>{{$song->title}}</h1>

@if (Auth::user())


  <ul class="list-group">

@foreach ($song->details as $detail)

  <li class="list-group-item">
  {{ $detail->body }}
  <a href="/details/{{ $detail->id}}>{{ $detail->id }}/edit" class="pull-right">Edit Post</a>
  <P>Post Created By: {{ $detail->user->name }}</P>
  <a href="/details/{{ $detail->id}}>{{ $detail->id }}/delete" class="pull-center">Delete</a>
  </li>

@endforeach

  </ul>
  <h2>What do you think of this singer?</h2>

  <form method="POST" action="/songs/{{ $song->id }}/details">
  {{csrf_field()}}
  <div class="form-group">
  <textarea name="body" class="form-control"></textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Add Post</button>
  </div>
  </form>


<a href="{{"/songs"}}">Go Back To The Singers Page</a>

@else

  You need to be signed in to view the Comments.

@endif


@if(Session::has('flash_message'))

  <div class="alert alert-success">
  {{ Session::get('flash_message') }}
  </div>

@endif


@if (count($errors))

    <ul>

@foreach ($errors->all() as $error)
    <li>
    {{ $error }}
    </li>

@endforeach

  </ul>

@endif



  </div>
  </div>

@stop
