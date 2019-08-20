<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profil";
    protected $fillable = ["nama_lengkap", "foto", "ttl", "asal_sekolah", "no_hp", "email", "sosmed", "detail_ayah", "detail_ibu", "user_id"];
}
