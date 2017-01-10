<?php

namespace App\Http\Controllers;

<<<<<<< HEAD

use App\Song;
use App\Note;



=======
use App\Song;
use App\Note;

>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Song $song)
    {

<<<<<<< HEAD
      $this->validate($request, [
        'body' => 'required'
      ]);


      $note= new Note($request->all());





      $song->addNote($note, 1);

=======
      $note = new Note;

      $note->body = $request->body;

      $song->notes()->save($note);
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa

      return back();


    }

    public function edit(Note $note)
{

    return view('notes.edit', compact('note'));
}


    public function update(Request $request, Note $note)
      {
<<<<<<< HEAD

=======
        
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
        $note->update($request->all());

        return back();
      }

}
