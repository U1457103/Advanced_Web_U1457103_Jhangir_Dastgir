@extends('layout')

@section('content')

  <h1>View All Users Profiles</h1>

<p>
  View Your Profile And Other Peoples Profiles. You Can Only Add And Edit Your Own Profile.
</p>

@foreach ($users as $user)

<li class="list-group-item" >
  <p class="pull-right">Email Address: {{$user->email}}</P>
  <p><a role="button" class="btn btn-sucess" href="/users/{{ $user->id}}">Profile </a>  Username: {{$user->name}}</p>
</li>
@endforeach



<a href="{{"/songs"}}">Go Back To The Singers Page</a>

@stop
