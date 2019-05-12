<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = "pembayaran";

    public function program(){
        return $this->belongsTo("App\Program");
    }
}
