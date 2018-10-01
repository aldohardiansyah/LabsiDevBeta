<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//Model
use App\Asisten;

class Catatan extends Authenticatable
{
    use Notifiable;


    protected $table = 'catatan';
    public $timestamps = false;
    protected $fillable = [
        'id_asisten','judul_catatan','jenis_catatan','isi'  ];

    protected $hidden = [
        'id',
    ];

    //Relasi Dengan Tabel User
    public function asisten() {
      return $this->hasOne(Asisten::class,'id_user','id_asisten');
    }


}
