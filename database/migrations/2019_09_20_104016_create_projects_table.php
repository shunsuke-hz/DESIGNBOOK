<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('top_image', 9999);
            $table->text('explain', 9999);
            $table->string('postal_code', 45);
            $table->integer('prefecture');
            $table->string('address', 255);
            $table->text('address_url', 9999);
            $table->integer('is_accepted');
            $table->integer('thumbnail_id');
            $table->integer('brand_id')->unsigned();
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('brands');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
