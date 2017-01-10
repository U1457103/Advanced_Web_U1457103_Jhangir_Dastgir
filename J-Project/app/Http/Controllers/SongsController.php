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

    $song->load('notes.user');



    $song->load('notes.user');


<<<<<<< HEAD
=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e

   return view('songs.show', compact('song'));

}

}
