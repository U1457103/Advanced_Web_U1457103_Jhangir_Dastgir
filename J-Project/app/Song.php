<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

  class Song extends Model{
  protected $fillable = ['body'];

  public function details(){
  return $this->hasMany(Detail::class);
// The song has many details.
  }

  public function adddetail(Detail $detail, User $user){
  return $this->details()->save($detail);
  }

}
