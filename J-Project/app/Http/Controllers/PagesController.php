<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    public function home()
    {


        return view('welcome');

    }

    public function song(){

<<<<<<< HEAD
      $songs = ['ohh song', 'ohhh new song'];
=======

>>>>>>> changes

 return view('pages.song', compact('songs'));



    }
}
