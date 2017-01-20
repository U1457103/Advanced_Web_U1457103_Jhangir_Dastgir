<?php

namespace App\Http\Controllers;
use App\Song;
use App\Detail;
use App\User;
use Auth;
use Session;
use Illuminate\Http\Request;



  class detailsController extends Controller {

  public function store(Request $request, Song $song, User $user){
  $this->validate($request, [
  'body' => 'required']);
  $detail= new Detail($request->all());
  $detail->by(Auth::user());
  $song->adddetail($detail, $user);
  Session::flash('flash_message', 'Comment Sucessfully added well done!');
  return back();
  }
// Add's the singer to this page. Validation in place as you need the body field to submit. Admin can do this.

  public function edit(Detail $detail, User $user){
  $detail->by(Auth::user());
  return view('details.edit', compact('detail'));
  }
// Only the user who made the post can edit. Admin can do this.

  public function update(Request $request, Detail $detail){
  $detail->by(Auth::user());
  $detail->update($request->all());
  Session::flash('flash_message', 'You have Updated Your comment well done!');
  return back();
  }
// Only the user who made the post can update. Admin can do this.

  public function delete(Detail $detail, Song $song, User $user){
  foreach ($song->details as $detail){
  $detail->delete();}
  $detail->delete();
  return back();
  }
// Only the user who made the post can delete. Admin can do this.

}
