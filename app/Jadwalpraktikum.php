<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Praktikum;
use App\Kelas;
use App\Laboratorium;


class jadwalpraktikum extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'jadwal_praktikum';
    public $timestamps = false;
    protected $fillable = [
        'id_praktikum',
        'id_kelas',
        'id_lab',
        'hari',
        'shift',
        'jam_mulai',
        'jam_selesai',
        'semester'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    public function praktikum() {
      return $this->hasOne(Praktikum::class,'id','id_praktikum');
    }
    public function kelas() {
      return $this->hasOne(Kelas::class,'id','id_kelas');
    }
    public function laboratorium() {
      return $this->hasOne(Laboratorium::class,'id','id_lab');
    }

}
