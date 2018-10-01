<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//Model
use App\Users;

class Aktivitas extends Authenticatable
{
    use Notifiable;


    protected $table = 'aktivitas';
    public $timestamps = false;
    protected $fillable = [
        'id_user', 'aktivitas', 'created_at'  ];

    protected $hidden = [
        'id',
    ];

    //Relasi Dengan Tabel User
    public function user() {
      return $this->hasOne(User::class,'id','id_user');
    }


}
