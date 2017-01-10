<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
<<<<<<< HEAD


{
  protected $fillable = ['body'];

    public function notes()
    {
      return $this->hasMany(Note::class);
    }
=======
{
    //
>>>>>>> 925cbf206bd770de54b474b29415fe60e128064f
}
