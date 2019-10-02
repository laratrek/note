<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Autoincrement Id.');
            $table->string('title')->comment('Page Title.');
            $table->mediumText('body')->comment('Page Body Text.');
            $table->unsignedInteger('user_id')->comment('User Id.');
            $table->tinyInteger('is_draft')->comment('Draft flag ');
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
        Schema::dropIfExists('pages');
    }
}
