<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = "detail";

    public function user() {
      return $this->hasOne('App\User','id','id_user');
    }
}
