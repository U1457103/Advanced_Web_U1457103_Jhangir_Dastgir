<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id');
=======

            $table->increments('id');

            $table->increments('songs_id');
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
            $table->string('title');
            $table->integer('lengthofsong');
            $table->string('lyrics');
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
        Schema::dropIfExists('songs');
    }
}
