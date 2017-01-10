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

            $table->increments('id');
<<<<<<< HEAD
=======
<<<<<<< HEAD


            $table->increments('id');

            $table->increments('songs_id');

            $table->increments('id');

=======
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e

            $table->increments('id');


            $table->increments('id');

            $table->increments('songs_id');

<<<<<<< HEAD
=======
>>>>>>> acd777ceafb2eb5d49e94cdba13ba8f04e28f41e
>>>>>>> 3041dd117b6002ce8704aadf7a959ae6a58c309e
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
