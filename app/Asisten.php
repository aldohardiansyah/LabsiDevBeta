<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//Model
use App\Users;

class Asisten extends Authenticatable
{
    use Notifiable;


    protected $table = 'asisten';
    public $timestamps = false;
    protected $fillable = [
        'id_user', 'nama_lengkap', 'kelas', 'npm', 'jabatan', 'status', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'kewarganegaraan',
        'agama', 'alamat', 'email', 'no_tlp', 'ipk', 'kemampuan', 'foto', 'cv', 'surat', 'nilai', 'created_at', 'semester'  ];

    protected $hidden = [
        'id',
    ];

    //Relasi Dengan Tabel User
    public function user() {
      return $this->hasOne(User::class,'id','id_user');
    }


}
