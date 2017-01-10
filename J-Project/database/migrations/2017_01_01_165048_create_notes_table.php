<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('notes', function (Blueprint $table) {
          $table->increments('id');
<<<<<<< HEAD
          $table->integer('user_id')->unsigned()->index();
=======
>>>>>>> 1931d75cac7afb892750bb2c97393a6ae87a7ffa
          $table->integer('song_id')->unsigned()->index();
          $table->text('body');
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
        Schema::dropIfExists('notes');
    }
}
