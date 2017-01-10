<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

  protected $fillable = ['song_id', 'body', 'created_at', 'updated_at'];
<<<<<<< HEAD
  protected $table = 'notes';
=======
   protected $table = 'notes';
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa


    public function song()
    {
      return $this->belongsTo(Song::class);
    }
<<<<<<< HEAD


  public function user()
  {
    return $this->belongsTo(User::class);
  }


  public function by(User $user)
  {
    $this->user_id = $user->id;
  }

=======
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
}
