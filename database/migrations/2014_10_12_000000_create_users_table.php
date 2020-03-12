<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image')->default('default.png');
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('national_id')->nullable();
            $table->string('card_no')->unique();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('about')->nullable();
            $table->string('join_date')->nullable();
            $table->string('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
