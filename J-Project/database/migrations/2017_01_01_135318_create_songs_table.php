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
            $table->increments('songs_id');
>>>>>>> 925cbf206bd770de54b474b29415fe60e128064f
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
