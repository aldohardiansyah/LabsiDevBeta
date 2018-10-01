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
        'name', 'username', 'password', 'role','ava'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //MIDDLEWARE CEK POIN BOSS
    public function UserAdmin(){
      if($this->role == "Staff" or $this->role == "PJ Shift") return TRUE;
      return FALSE;
    }

    public function UserAsisten(){
      if($this->role == "Asisten" or $this->role == "PJ Shift") return TRUE;
      return FALSE;
    }

}
