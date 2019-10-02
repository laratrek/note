<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Autoincrement Id.');
            $table->string('title')->comment('Template title.');
            $table->mediumText('body')->comment('Template body text.');
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
        Schema::dropIfExists('templates');
    }
}
