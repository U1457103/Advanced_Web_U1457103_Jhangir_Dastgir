<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

  class Detail extends Model{
  protected $fillable = ['song_id', 'body', 'created_at', 'updated_at'];
  protected $table = 'details';

  public function song(){
  return $this->belongsTo(Song::class);
  }

  public function user(){
  return $this->belongsTo(User::class);
  }

  public function by(User $user){
  $this->user_id = $user->id;
  }

}
