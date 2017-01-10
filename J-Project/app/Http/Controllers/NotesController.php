<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======


use App\Song;
use App\Note;
use App\User;
use Auth;



use App\Song;
use App\Note;



>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e

use App\Song;
use App\Note;


use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Song $song)
    {

<<<<<<< HEAD
=======
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



>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
      $this->validate($request, [
        'body' => 'required'
      ]);


      $note= new Note($request->all());





      $song->addNote($note, 1);


      $note = new Note;

      $note->body = $request->body;

      $song->notes()->save($note);


      return back();


    }

    public function edit(Note $note)
{

<<<<<<< HEAD

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

=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
    return view('notes.edit', compact('note'));
}


    public function update(Request $request, Note $note)
<<<<<<< HEAD

        $note->update($request->all());


=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e

      {
        $note->by(Auth::user());
        $note->update($request->all());

<<<<<<< HEAD
=======
      {

        $note->update($request->all());


>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
        return back();
      }

}
