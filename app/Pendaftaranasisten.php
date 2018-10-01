<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pendaftaranasisten extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'pendaftaran_asisten';

    protected $fillable = [
        'nama_lengkap',
        'kelas',
        'npm',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'kewarganegaraan',
        'agama',
        'alamat',
        'email',
        'no_tlp',
        'ipk',
        'kemampuan',
        'foto',
        'cv',
        'surat',
        'nilai',
        'created_at',
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
}
