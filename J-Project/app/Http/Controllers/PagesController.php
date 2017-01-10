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
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
      $songs = ['ohh song', 'ohhh new song'];

<<<<<<< HEAD
>>>>>>> changes
=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e

 return view('pages.song', compact('songs'));



    }
}
