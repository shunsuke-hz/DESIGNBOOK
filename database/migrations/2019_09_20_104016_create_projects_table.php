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
      $table->text('top_image', 9999)->nullable();
      $table->text('explain', 9999)->nullable();
      $table->string('postal_code', 45)->nullable();
      $table->integer('prefecture')->nullable();
      $table->string('address', 255)->nullable();
      $table->text('address_url', 9999)->nullable();
      $table->integer('is_accepted')->nullable();
      $table->integer('thumbnail_id')->nullable();
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
