@extends('layouts.app')

@section('content')

  <div class="container">
  <div class="row">
  <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
  <div class="panel-heading">Dashboard</div>
  <div class="panel-body">

@if (Auth::user()->email==='Admin@hotmail.co.uk')
 {!! $chart->render() !!}
@endif



    <p>Go Ahead and explore the website!!</p>

@if (Auth::user()->email==='Admin@hotmail.co.uk')

  <h3>You Are the Admin of the website, Welcome Sir.</h3>

@else

You Are Signed In As A User :D

@endif

  </div>
  </div>
  </div>
  </div>
  </div>
@endsection
