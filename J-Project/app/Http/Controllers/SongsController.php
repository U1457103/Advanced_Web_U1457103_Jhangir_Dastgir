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
<<<<<<< HEAD
    $song->load('notes.user');


=======
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa

   return view('songs.show', compact('song'));

}

}
