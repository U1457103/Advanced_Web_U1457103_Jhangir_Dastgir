<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

  protected $fillable = ['song_id', 'body', 'created_at', 'updated_at'];

  protected $table = 'notes';

   protected $table = 'notes';

  protected $table = 'notes';



    public function song()
    {
      return $this->belongsTo(Song::class);
    }



  public function user()
  {
    return $this->belongsTo(User::class);
  }


  public function by(User $user)
  {
    $this->user_id = $user->id;
  }


}
