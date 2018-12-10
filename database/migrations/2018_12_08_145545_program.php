<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Program extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('program', function (Blueprint $table) {
            $table->increments('id');
            $table->string("judul");
            $table->text("deskripsi");
            $table->integer("harga");
            $table->integer("dp");
            $table->softDeletes();
            $table->timestamps();
        });
    }
}
