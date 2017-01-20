@extends('layout')

@section('content')

  <h1>View All Users</h1>

<p>
   You can also add to the User Profile's and write what you think about the person or just read their wonderful profile
</p>

@foreach ($users as $user)

<li class="list-group-item" >
  <p class="pull-right">Email Address: {{$user->email}}</P>
  <p><a role="button" class="btn btn-sucess" href="/users/{{ $user->id}}">Profile </a>  Username: {{$user->name}}</p>
</li>
@endforeach



<a href="{{"/songs"}}">Go Back To The Singers Page</a>

@stop
