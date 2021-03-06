@extends('layout')

@section('content')

@if (Auth::id())

  <h1>Edit your comment</h1>

  <form method="POST" action="/details/{{ $detail->id }}">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="form-group">
  <textarea name="body" class="form-control">{{ $detail->body }}</textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Update Post</button>
  </div>
  </form>

@if(Session::has('flash_message'))
  <div class="alert alert-success">
  {{ Session::get('flash_message') }}
  </div>
@endif

@else

  You need to be signed in order to edit the comments!

@endif







@stop
