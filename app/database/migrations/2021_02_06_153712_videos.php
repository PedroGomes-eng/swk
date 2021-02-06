<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Videos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table){
            $table->id();
            $table->bigInteger('id_youtuber')->unsigned()->nullable();
            $table->string('url');
            $table->string('title');
            $table->text('description');
            $table->foreign('id_youtuber')->references('id')->on('youtubers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifExists('videos');
    }
}
