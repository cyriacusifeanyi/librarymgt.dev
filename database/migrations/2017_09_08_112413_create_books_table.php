<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author');
            $table->string('title');
            $table->text('description');
            $table->string('series');
            $table->string('genre');
            $table->string('subject');
            $table->string('country');/*country of creation*/
            $table->string('publisher');
            $table->string('ISBN')->unique()->nullable();
            $table->string('ISSN')->unique()->nullable();
            $table->string('size');
            $table->integer('year');/*year of creation*/
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
        Schema::dropIfExists('books');
    }
}
