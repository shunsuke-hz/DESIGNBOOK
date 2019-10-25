<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('brands', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 255);
      $table->text('url', 9999);
      $table->string('postal_code', 45);
      $table->integer('prefecture');
      $table->string('address', 255);
      $table->text('profile', 9999);
      $table->string('mail_address', 255);
      $table->string('phone_number', 45);
      $table->text('logo_image', 9999);
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
    Schema::dropIfExists('brands');
  }
}
