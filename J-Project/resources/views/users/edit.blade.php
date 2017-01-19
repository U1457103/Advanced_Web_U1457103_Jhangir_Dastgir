@extends('layout')

@section('content')

@if (Auth::user())

  <h1>Edit User Comments</h1>

  <form method="POST" action="/users/{{ $user->id }}">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="form-group">
  <textarea name="profile" class="form-control">{{ $user->profile }}</textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Update Profile Comment</button>
  </div>
  </form>

@if(Session::has('flash_message'))
  <div class="alert alert-success">
  {{ Session::get('flash_message') }}
  </div>
@endif

@else

  You need to be admin in order to edit the profile comments!!!

@endif







@stop
