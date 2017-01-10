<?php

namespace App\Http\Controllers;


use App\Song;
use App\Note;
use App\User;
use Auth;


use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Song $song)
    {
      $this->validate($request, [
        'body' => 'required'
      ]);
      $note= new Note($request->all());
      $note->by(Auth::user());
      $song->addNote($note);
      return back();

    }

    public function edit(Note $note)

{
    $note->by(Auth::user());
    return view('notes.edit', compact('note'));
}


    public function update(Request $request, Note $note)

      {
        $note->by(Auth::user());
        $note->update($request->all());
        return back();
      }

}
