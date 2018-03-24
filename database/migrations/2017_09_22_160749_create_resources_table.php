<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('author');//separated by comma

            $table->text('description')->nullable();;
            $table->string('type');//video,audio,text/picture

//laravel would acquire it at upload in controller
            $table->string('url');//i can edit few things to view thumb,file and other associating files
            $table->string('size')->nullable();
            $table->string('extension')->nullable();

            $table->string('publisher')->nullable();//books
            $table->string('producer')->nullable();//not nullable to music and videos

            $table->string('category');//Dewine decimal classification can determine subject and tags
            $table->string('audience');//jss1,jss2,jss3,..advance leaners,//browse educational age distrubution or division

            $table->string('ISBN')->unique()->nullable();//books
            $table->string('ISSN')->unique()->nullable();//books

            $table->string('disability');
            $table->string('disabilityNote')->nullable();
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
        Schema::dropIfExists('resources');
    }
}
