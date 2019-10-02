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
            $table->bigIncrements('id')->comment('Autoincrement Id.');
            $table->string('name')->comment('user name');
            $table->string('email')->comment('Email')->unique()->comment('Email address');
            $table->timestamp('email_verified_at')->nullable()->comment('Email verify date');
            $table->string('password')->comment('user password');
            $table->tinyInteger('permision')->comment('0:member / 1:administrator');
            $table->rememberToken()->comment('remember me token');
            $table->dateTime('deleted_at')->comment('Deleted date.');
            $table->dateTime('updated_at')->comment('Updated date.');
            $table->dateTime('created_at')->comment('Created date.');
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
