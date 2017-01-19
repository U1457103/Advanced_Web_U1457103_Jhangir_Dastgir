@extends('layout')

@section('content')

  <h1>All Users</h1>


@foreach ($users as $user)

<li class="list-group-item" >
  <p class="pull-right">
    Email Address: {{$user->email}}
  </P>
  <p>
  <a href="/users/{{ $user->id}}">My Profile </a>  Username: {{$user->name}}
  </p>

</li>
@endforeach


  <h2>Add A User</h2>

  <form method="POST" action="/users">
  {{csrf_field()}}
  <div class="form-group">
  <textarea name="name" class="form-control"></textarea>
  <p>
    Username
  </p>
  <textarea name="email" class="form-control"></textarea>
  <p>
      Email Address
  </p>
  <textarea name="password" class="form-control"></textarea>
  <p>
    Password
  </p>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Create User</button>
  </div>
  </form>

<a href="{{"/songs"}}">Go Back To The Singers Page</a>

@stop
