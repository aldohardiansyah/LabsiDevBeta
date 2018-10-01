<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Jurusan;

class Praktikum extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'praktikum';
    public $timestamps = false;
    protected $fillable = [
        'kode_matkul',
        'matkul',
        'kode_praktikum',
        'id_jurusan',
        'tingkat',
        'tgl_mulai',
        'tgl_selesai',
        'aplikasi',
        'materi',
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

    public function jurusan() {
      return $this->hasOne(Jurusan::class,'id','id_jurusan');
    }




}
