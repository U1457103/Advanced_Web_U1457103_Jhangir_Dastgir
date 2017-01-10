@extends('layout')

@section('content')

  <h1>All Users</h1>


@foreach ($users as $user)


  <div>
<p>
    Username: {{$user->name}}
</p>

<P>
  Email Address: {{$user->email}}
</P>
  </div>


  <div>
    {{$user->name}}
  </div>

@endforeach


@stop
