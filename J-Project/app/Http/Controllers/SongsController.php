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
<<<<<<< HEAD
=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e

   return view('songs.show', compact('song'));

}

}
