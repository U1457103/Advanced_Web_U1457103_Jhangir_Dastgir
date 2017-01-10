<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller

{
    public function index()
    {
      $users =  User::all();
<<<<<<< HEAD

=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e

      return view ('users.index', compact('users'));
    }


    public function show(User $user)

    {


<<<<<<< HEAD

=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
      return view ('users.index', compact('users'));
    }
    public function show(User $user)
    {

<<<<<<< HEAD
=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
      return view('users.show', compact('user'));
    }

}
