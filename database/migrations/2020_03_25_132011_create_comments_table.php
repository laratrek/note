<?php
// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Autoincrement Id.');
            $table->unsignedBigInteger('page_id')->comment('Page relation Id.');
            $table->unsignedBigInteger('user_id')->comment('User Id.');
            $table->mediumText('body')->comment('Comment Text Body Text.');
            $table->dateTime('deleted_at')->comment('Deleted date.')->nullable();
            $table->dateTime('updated_at')->comment('Updated date.');
            $table->dateTime('created_at')->comment('Created date.');
            $table->foreign('page_id')->references('id')->on('pages');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
