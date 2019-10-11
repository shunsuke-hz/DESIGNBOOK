<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectImagesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('project_images', function (Blueprint $table) {
      $table->increments('id');
      $table->text('image', 9999)->nullable();
      $table->string('title', 255)->nullable();
      $table->text('explain', 9999)->nullable();
      $table->integer('project_id')->unsigned();
      $table->timestamps();
      $table->foreign('project_id')->references('id')->on('projects');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('project_images');
  }
}
