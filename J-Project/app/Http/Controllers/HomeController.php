<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Charts;
use App\User;



  class HomeController extends Controller
  {
  /**
  * Create a new controller instance.
  *
  * @return void
  */

  public function __construct(){
  $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */

  public function index(){
  $chart = Charts::database(User::all(), 'bar', 'highcharts')
  ->elementLabel("Users On The Website")
  ->groupBy('name');
  return view('home', ['chart' => $chart]);
  }
// Shows the Chart to the admin. 


}
