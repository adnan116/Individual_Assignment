<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    public $timestamps = false;
    protected $primaryKey = 'cid';

    public function user() {
      return $this->hasMany('User', 'id');
    }
}
