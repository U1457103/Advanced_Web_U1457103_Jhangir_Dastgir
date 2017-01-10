<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

  protected $fillable = ['song_id', 'body', 'created_at', 'updated_at'];

  protected $table = 'notes';

<<<<<<< HEAD
   protected $table = 'notes';

  protected $table = 'notes';

=======
  protected $table = 'notes';

   protected $table = 'notes';

>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e


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
