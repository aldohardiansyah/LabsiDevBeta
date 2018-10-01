<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//Model0
use App\Praktikum;
use App\Asisten;


class Isianjadwalasisten extends Authenticatable
{
    use Notifiable;


    protected $table = 'isian_jadwal_asisten';
    public $timestamps = false;
    protected $fillable = [
        'id_asisten', 'nama_lengkap', 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu', 'jabatan','semester'  ];


    protected $hidden = [
        'id',
    ];


    //Relasi Dengan Tabel Jadwalpraktikum
    public function jadwalpraktikum() {
      return $this->hasOne(Jadwalpraktikum::class,'id','id_jadwalpraktikum')->with('kelas')->with('praktikum')->with('laboratorium');
    }
    //Relasi Dengan Tabel Asisten
    public function asisten() {
      return $this->hasOne(Asisten::class,'id','id_asisten');
    }
}
