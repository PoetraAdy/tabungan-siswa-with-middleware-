<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabung extends Model
{
    protected $table = "tabung";
    public $timestamps = false;

    public function iduser() {
      return $this->hasMany('App\User','id','id_user');
    }

    public function idpetugas() {
      return $this->hasMany('App\User','id','id_petugas');
    }
}
