<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model

<<<<<<< HEAD



=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
{
  protected $fillable = ['body'];

    public function notes()
    {
      return $this->hasMany(Note::class);
    }


<<<<<<< HEAD
=======

    public function addNote(Note $note)
    {

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e

    public function addNote(Note $note, $user_Id)
    {
      $note->user_id = $user_Id;
<<<<<<< HEAD


    public function addNote(Note $note)
    {

=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e

      return $this->notes()->save($note);
    }


}
