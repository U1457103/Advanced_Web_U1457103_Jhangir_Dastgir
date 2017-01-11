<?php

namespace App\Http\Controllers;

use App\Song;

use Session;

use Illuminate\Http\Request;

class SongsController extends Controller
{


    public function index()
    {
      $songs = Song::all();

      return view('songs.index', compact('songs'));
    }


public function show(Song $song)

{
    $song->load('notes.user');



   return view('songs.show', compact('song'));

}




}
