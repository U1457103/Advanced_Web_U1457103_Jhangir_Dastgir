<?php

namespace App\Http\Controllers;

use App\Song;


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

   return view('songs.show', compact('song'));

}

}
