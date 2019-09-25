<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_name')->nullable();;
            $table->string('name')->nullable();;
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('sex')->nullable();
            $table->string('phone_number', 45)->nullable();
            $table->date('birthday')->nullable();
            $table->string('belonging_to', 255)->nullable();
            $table->text('profile_image', 9999)->nullable();
            $table->integer('admin_user')->default('1');
            $table->integer('brand_id')->unsigned()->nullable();
            $table->tinyInteger('email_verified')->default(0);
            $table->string('email_verify_token')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
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
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('email_verified');
          $table->dropColumn('email_verify_token');
          $table->dropColumn('status');
        });
    }
}
