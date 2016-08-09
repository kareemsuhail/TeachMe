<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassDiscussion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classdiscussiontable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classid')->unsigned()->index();
            $table->integer('userid')->unsigned()->index();
            $table->mediumText('body');


            $table->timestamps();
            $table->foreign('classid')
                ->references('id')->on('classestable')
                ->onDelete('cascade');
            $table->foreign('userid')
                ->references('id')->on('users')
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
