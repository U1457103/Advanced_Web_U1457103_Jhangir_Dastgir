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
<<<<<<< HEAD

=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e

      return view ('users.index', compact('users'));
    }


    public function show(User $user)

    {


<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
      return view ('users.index', compact('users'));
    }
    public function show(User $user)
    {

<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
      return view('users.show', compact('user'));
    }

}
