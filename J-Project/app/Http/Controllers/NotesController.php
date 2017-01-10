<?php

namespace App\Http\Controllers;


use App\Song;
use App\Note;



use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Song $song)
    {

      $this->validate($request, [
        'body' => 'required'
      ]);


      $note= new Note($request->all());





      $song->addNote($note, 1);


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
