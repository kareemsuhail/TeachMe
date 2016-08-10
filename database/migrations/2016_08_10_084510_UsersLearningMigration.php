<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersLearningMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsersLearnignTable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->unsigned()->index();
            $table->integer('categoryid')->unsigned()->index();


            $table->timestamps();
            $table->foreign('userid')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('categoryid')
                ->references('id')->on('categoriestable')
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
        //
    }
}
