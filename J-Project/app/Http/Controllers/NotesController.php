<?php

namespace App\Http\Controllers;

use App\Song;
use App\Note;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Song $song)
    {

      $note = new Note;

      $note->body = $request->body;

      $song->notes()->save($note);

      return back();


    }

    public function edit(Note $note)
{

    return view('notes.edit', compact('note'));
}


    public function update(Request $request, Note $note)
      {
        
        $note->update($request->all());

        return back();
      }

}
