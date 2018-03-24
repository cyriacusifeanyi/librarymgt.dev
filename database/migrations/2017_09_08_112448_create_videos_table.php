<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('videos', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('author');
//            $table->string('title');
//            $table->text('description');
//            $table->string('series');
//            $table->string('episode');
//            $table->string('genre');
//            $table->string('producer');
//            $table->string('size');
//            $table->smallInteger('year');/*year of creation*/
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
