<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersCoursesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsersCourseTable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->index()->unsigned();
            $table->integer('courseid')->unsigned()->index();
            $table->timestamps();
            $table->foreign('userid')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('courseid')
                ->references('id')->on('courcestable')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('UsersCourseTable');
    }
}
