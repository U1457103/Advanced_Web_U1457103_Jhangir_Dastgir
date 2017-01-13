<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

  class Song extends Model{
  protected $fillable = ['body'];

  public function details(){
  return $this->hasMany(Detail::class);
  }

  public function adddetail(Detail $detail){
  return $this->details()->save($detail);
  }

}
