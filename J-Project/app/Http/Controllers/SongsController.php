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
    // Shows the admin the total number of user posts on the website.
    }

  public function search(Request $request){
    $search= $request->get('search');
    $songs = Song::where('title','like','%'.$search.'%')->get();
    return view('songs.index', compact('songs'));
  }
  // Users can enter the singer's name and it wil appear. 

    public function show(Song $song)
    {
    $song->load('details.user');
    return view('songs.show', compact('song'));
// Loads all of the singers
    }

}
