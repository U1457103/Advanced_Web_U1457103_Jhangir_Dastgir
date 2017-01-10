<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

  protected $fillable = ['song_id', 'body', 'created_at', 'updated_at'];

  protected $table = 'notes';

<<<<<<< HEAD
=======
<<<<<<< HEAD
   protected $table = 'notes';

  protected $table = 'notes';

=======
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
  protected $table = 'notes';

   protected $table = 'notes';

<<<<<<< HEAD
=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e


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
