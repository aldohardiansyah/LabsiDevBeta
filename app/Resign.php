<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Asisten;

class Resign extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'resign';
    public $timestamps = false;
    protected $fillable = [
        'id_asisten',
        'alasan',
        'created_at',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];


    public function asisten() {
      return $this->hasOne(Asisten::class,'id_user','id_asisten');
    }


}
