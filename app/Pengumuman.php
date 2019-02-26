<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Pengumuman extends Model
{
    protected $table = "pengumuman";

    public function user(){
        return $this->belongsToMany('App\User');
    }
}
