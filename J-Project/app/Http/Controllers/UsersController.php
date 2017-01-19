<?php

namespace App\Http\Controllers;
use App\Song;
use App\Detail;
use App\User;
use Auth;
use Session;
use Illuminate\Http\Request;

    class UsersController extends Controller{

    public function index(){
    $users =  User::all();
    return view ('users.index', compact('users'));
// If the user is registered then show all users
    }


    public function show(User $user){
    return view('users.show', compact('user'));
// shows all the users on the website
    }



}
