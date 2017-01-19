@extends('layout')

@section('content')

@if (Auth::user())

  <h1>Edit Profile</h1>

  <div class="container">
  <form method="POST" action="/users/{{ $userprofile->id }}">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="form-group">
  <textarea name="profile" class="form-control">{{$userprofile->profile}}</textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Update Profile</button>
  </div>
  </div>
  </form>

  @if(Session::has('flash_message'))
    <div class="alert alert-success">
    {{ Session::get('flash_message') }}
    </div>
  @endif

@else

  Please Sign In.

@endif







@stop
