<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//Model
use app\Users;

class Informasi extends Authenticatable
{
    use Notifiable;


    protected $table = 'informasi';
    public $timestamps = false;
    protected $fillable = [
        'judul', 'photo', 'slug', 'kategori', 'id_user', 'tgl_buat', 'isi'  ];

    protected $hidden = [
        'id',
    ];


    //Relasi Dengan Tabel User
    public function user() {
      return $this->hasOne(User::class,'id','id_user');
    }

}
