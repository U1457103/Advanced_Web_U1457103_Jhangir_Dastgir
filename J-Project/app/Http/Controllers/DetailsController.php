<?php

namespace App\Http\Controllers;
use App\Song;
use App\Detail;
use App\User;
use Auth;
use Session;
use Illuminate\Http\Request;

// From the above code i am using the different Files within my project
// this is so that i can get the below code to work as i am using
// the files for these codes

  class detailsController extends Controller {

  public function store(Request $request, Song $song, User $user){
  $this->validate($request, [
  'body' => 'required']);
// This is validation as the user will need to enter something
// in order to move on.
  $detail= new Detail($request->all());
  $detail->by(Auth::user());
// Only the user can enter in the box and add a new comment
  $song->adddetail($detail, $user);
  Session::flash('flash_message', 'Comment Sucessfully added well done!');
// The user will get a flash message saying well done!!
  return back();
// The user is re-directed to the same page.
  }

  public function edit(Detail $detail, User $user){
  $detail->by(Auth::user());
// Only the user can edit the comments
  return view('details.edit', compact('detail'));
// returns the user to the edit page.
  }

  public function update(Request $request, Detail $detail){
  $detail->by(Auth::user());
  $detail->update($request->all());
// Only the user can update their comments
  Session::flash('flash_message', 'You have Updated Your comment well done!');
// Once again the user will be displayed a message saying well done for updating
  return back();
// The user is re-directed to the same page.
  }

  public function delete(Detail $detail, Song $song, User $user){
  foreach ($song->details as $detail){
  $detail->delete();}
  $detail->delete();
// The user can delete a comment if they wish too
  return back();
// The user is re-directed to the same page.
  }


}
