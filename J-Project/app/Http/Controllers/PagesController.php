<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    public function home()
    {


        return view('welcome');

    }

    public function song(){



 return view('pages.song', compact('songs'));



    }
}
