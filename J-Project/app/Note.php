<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

  protected $fillable = ['song_id', 'body', 'created_at', 'updated_at'];
   protected $table = 'notes';


    public function song()
    {
      return $this->belongsTo(Song::class);
    }
}
