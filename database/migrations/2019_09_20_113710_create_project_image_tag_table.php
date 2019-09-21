<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectImageTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_image_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tag_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->integer('project_image_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('project_id')->references('project_id')->on('project_images');
            $table->foreign('project_image_id')->references('id')->on('project_images');
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
        Schema::dropIfExists('project_image_tag');
    }
}
