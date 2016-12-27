<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
    *
    * Boot the model.
    *
    */
   public static function boot()
   {
       parent::boot();
       static::creating(function ($user) {
           $user->token = str_random(40);
       });
   }

   public function  hasVerified()
   {
     $this->verified = true;
       $this->token = null;
       $this->save();
   }
}
