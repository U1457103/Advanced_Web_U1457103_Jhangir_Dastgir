<?php

namespace App\Http\Controllers;
use App\Song;
use App\Detail;
use App\User;
use Auth;
use Session;
use Illuminate\Http\Request;

  class detailsController extends Controller {

  public function store(Request $request, Song $song){
  $this->validate($request, [
  'body' => 'required']);
  $detail= new Detail($request->all());
  $detail->by(Auth::user());
  $song->adddetail($detail);
  Session::flash('flash_message', 'Comment Sucessfully added well done!');
  return back();
  }

  public function edit(Detail $detail, User $user){
  $detail->by(Auth::user());
  return view('details.edit', compact('detail'));
  }

  public function update(Request $request, Detail $detail){
  $detail->by(Auth::user());
  $detail->update($request->all());
  Session::flash('flash_message', 'You have Updated Your comment well done!');
  return back();
  }

  public function delete(Detail $detail, Song $song, User $user){
  foreach ($song->details as $detail){
  $detail->delete();}
  $detail->delete();
  return back();
  }


}
