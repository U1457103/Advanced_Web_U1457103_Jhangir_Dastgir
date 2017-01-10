<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model

<<<<<<< HEAD
=======
<<<<<<< HEAD



=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
{
  protected $fillable = ['body'];

    public function notes()
    {
      return $this->hasMany(Note::class);
    }


<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e

    public function addNote(Note $note)
    {

<<<<<<< HEAD
=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e

    public function addNote(Note $note, $user_Id)
    {
      $note->user_id = $user_Id;
<<<<<<< HEAD

=======
<<<<<<< HEAD


    public function addNote(Note $note)
    {

=======

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e

      return $this->notes()->save($note);
    }


}
