<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
<<<<<<< HEAD


=======
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
{
  protected $fillable = ['body'];

    public function notes()
    {
      return $this->hasMany(Note::class);
    }

<<<<<<< HEAD

    public function addNote(Note $note, $user_Id)
    {
      $note->user_id = $user_Id;

      return $this->notes()->save($note);
    }

=======
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
}
