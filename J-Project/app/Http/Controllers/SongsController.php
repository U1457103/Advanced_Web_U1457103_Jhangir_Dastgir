<?php

namespace App\Http\Controllers;
use App\Song;
use Session;
use Illuminate\Http\Request;

    class SongsController extends Controller{

    public function index(){
    $songs = Song::all();
    return view('songs.index', compact('songs'));
// Shows all the singers on the singers page
    }

    public function show(Song $song)
    {
    $song->load('details.user');
    return view('songs.show', compact('song'));
// Lods all of the singers    
    }

}
