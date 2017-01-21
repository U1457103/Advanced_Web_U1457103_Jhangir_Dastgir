<?php

namespace App\Http\Controllers;
use App\Song;
use App\Detail;
use App\User;
use Auth;
use Charts;
use Session;
use Illuminate\Http\Request;

    class SongsController extends Controller{


    public function index(Request $request){
    $songs = Song::all();
    return view('songs.index', compact('songs'));
    //  Shows all the singers on the singers page
    }

    public function admin(Request $request){
    $chart = Charts::database(Detail::all(), 'bar', 'highcharts')
    ->elementLabel("Total User Posts On The Website")
    ->groupBy( 'name');
    return view('songs.admin', ['chart' => $chart]);
    }

    public function songs(){
    $chart = Charts::database(Detail::all(), 'bar', 'highcharts')
    ->elementLabel("User Posts")
    ->groupBy('song_id', 'User_id');
    return view('home', ['chart' => $chart]);
    }

  public function search(Request $request){
    $search= $request->get('search');
    $songs = Song::where('title','like','%'.$search.'%')->get();
    return view('songs.index', compact('songs'));
  }

    public function show(Song $song)
    {
    $song->load('details.user');
    return view('songs.show', compact('song'));
// Loads all of the singers
    }

}
