<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductProjectImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_project_image', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->integer('project_image_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('project_id')->references('project_id')->on('project_images');
            $table->foreign('project_image_id')->references('id')->on('project_images');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_project_image');
    }
}
