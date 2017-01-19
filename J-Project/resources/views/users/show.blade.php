@extends('layout')

@section('content')

  <h1>{{$user->name}}</h1>

  <ul class="list-group">

@if (Auth::user())

@foreach ($user->userprofiles as $userprofile)

  <li class="list-group-item">
  {{$userprofile->profile}}
  </li>

@endforeach





  <h2>Add To Profile</h2>

  <form method="POST" action="/users/{{ $user->id }}">
  {{csrf_field()}}
  <div class="form-group">
  <textarea name="profile" class="form-control"></textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Add Profile</button>
  </div>
  </form>


<a href="{{"/users"}}">Go Back To The Users Page</a>

@else

  You need to be signed in to view the Profile Comments.

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



@stop
