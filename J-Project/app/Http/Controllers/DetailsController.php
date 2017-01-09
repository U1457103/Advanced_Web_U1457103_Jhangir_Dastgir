<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
      $details =  Detail::all();

      return view ('users.show', compact('details'));
    }
    public function show(detail $details)
    {


      return view('users.show', compact('user'));
    }

}
