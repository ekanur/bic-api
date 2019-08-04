<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nama_lengkap");
            $table->string("foto");
            $table->string("ttl");
            $table->string("asal_sekolah");
            $table->string("no_hp");
            $table->string("email");
            $table->string("sosmed");
            $table->string("detail_ayah");
            $table->string("detail_ibu");
            $table->integer("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
