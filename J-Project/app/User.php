<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


  class User extends Authenticatable{


    protected $fillable = ['name', 'email', 'password'];

    public function userprofiles(){
    return $this->hasMany(Userprofile::class);
    }

    public function by(User $user){
    $this->user_id = $user->id;
    }


  use Notifiable;
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */


  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */

  protected $hidden = [
  'password', 'remember_token',];

}
