<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model


{
  protected $fillable = ['body'];

    public function notes()
    {
      return $this->hasMany(Note::class);
    }


    public function addNote(Note $note)
    {

      return $this->notes()->save($note);
    }

}
