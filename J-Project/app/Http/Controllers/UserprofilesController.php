<?php

namespace App\Http\Controllers;
use App\Userprofile;
use App\User;
use Auth;
use Session;
use Illuminate\Http\Request;

    class UserProfilesController extends Controller{


    public function store(Request $request, User $user, Userprofile $userprofile)
    {
    $this->validate($request, ['profile' => 'required']);
    $userprofile= new Userprofile($request->all());
    $userprofile->by(Auth::user());
    $user->userprofiles()->save($userprofile);
    Session::flash('flash_message', 'Profile Comment Sucessfully added well done!');
    return back();
    }

    public function edit(Userprofile $userprofile, User $user){
    return view('users.edit', compact('userprofile'));
  // returns the user to the edit page.
    }


    public function update(Request $request, Userprofile $userprofile){
    $userprofile->update($request->all());
    Session::flash('flash_message', 'You have Updated The Profile well done!');
    return back();
    }

    public function delete(Userprofile $userprofile, User $user){
    foreach ($user->userprofiles as $userprofile){
    $userprofile->delete();}
    $userprofile->delete();
    return back();

}
}
