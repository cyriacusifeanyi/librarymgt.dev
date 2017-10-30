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

//            general
            $table->string('author');
            $table->string('title');
            $table->text('description');
            $table->string('type');//video,audio,text/picture


//            $table->string('meta_type');
//            /*magazine, sheet music, past question, Newspaper, Research, Textbook, Journals, etc audio-book literature*/
            $table->string('genre')->nullable();;//not nullable for music and video file
//            $table->string('category');
//            $table->string('audience');jss1,jss2,jss3,..advance leaners,
//
            $table->string('subject');
            $table->string('size')->nullable();;
            $table->string('publisher')->nullable();;//books
            $table->string('producer')->nullable();;//not nullable to music and videos

//            $table->smallInteger('year');/*year of creation*/
//            $table->string('country');/*country of creation*/ /*General*//*nulable*/

            $table->string('url');
//
//            //            books
            $table->string('ISBN')->unique()->nullable();//books
            $table->string('ISSN')->unique()->nullable();//books
////            audio
            $table->string('album')->nullable();;//for audio only

//            $table->integer('track');
////            Video
//            $table->string('series');//for video
//            $table->string('episode');
//

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
