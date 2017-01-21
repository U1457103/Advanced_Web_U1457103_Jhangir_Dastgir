@extends('layout')

@section('content')



@if (Auth::user()->email==='Admin@hotmail.co.uk')
   {!! $chart->render() !!}

@else

  You do not have permission to view this. Please contact the admin.
@endif

@if (Auth::user()->email==='Admin@hotmail.co.uk')

    Total User Posts on The Website.

@endif




@stop
