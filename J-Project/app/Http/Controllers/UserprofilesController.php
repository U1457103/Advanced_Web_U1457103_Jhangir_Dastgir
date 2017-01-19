<?php

namespace App\Http\Controllers;
use App\Userprofile;
use App\User;
use Auth;
use Session;
use Illuminate\Http\Request;

    class UserProfilesController extends Controller{


    public function store(Request $request, User $user)
    {
    $this->validate($request, ['profile' => 'required']);
    $userprofile= new Userprofile($request->all());
    $userprofile->by(Auth::user());
    $user->userprofiles()->save($userprofile);
    Session::flash('flash_message', 'Profile Comment Sucessfully added well done!');
    return back();
    }

    public function edit(User $user){
    $user->by(Auth::user());
    return view('users.edit', compact('user'));
  // returns the user to the edit page.
    }



}
