<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e


use App\Song;
use App\Note;
use App\User;
use Auth;



use App\Song;
use App\Note;



<<<<<<< HEAD
=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e

use App\Song;
use App\Note;


use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Song $song)
    {

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
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



<<<<<<< HEAD
=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
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

=======
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
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
    return view('notes.edit', compact('note'));
}


    public function update(Request $request, Note $note)
<<<<<<< HEAD

=======
<<<<<<< HEAD

        $note->update($request->all());


=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e

      {
        $note->by(Auth::user());
        $note->update($request->all());

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
      {

        $note->update($request->all());


<<<<<<< HEAD
=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
        return back();
      }

}
