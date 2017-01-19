@extends('layout')

@section('content')

  <h1>All Users</h1>


@foreach ($users as $user)

<li class="list-group-item" >
  <p class="pull-right">Email Address: {{$user->email}}</P>
  <p><a href="/users/{{ $user->id}}">My Profile </a>  Username: {{$user->name}}</p>
</li>
@endforeach



<a href="{{"/songs"}}">Go Back To The Singers Page</a>

@stop
