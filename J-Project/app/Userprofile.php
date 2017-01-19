<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userprofile extends Model
{

 protected $fillable = ['profile'];

  public function user(){

  return $this->belongsTo(User::class);
  }

  public function by(User $user){
  $this->user_id = $user->id;
  }


}
