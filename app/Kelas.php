<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Jurusan;

class Kelas extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'kelas';
    public $timestamps = false;
    protected $fillable = [
        'kelas',
        'id_jurusan',
        'kampus'

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
