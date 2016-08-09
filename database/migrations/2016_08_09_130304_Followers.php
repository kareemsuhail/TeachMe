<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Followers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followerstable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('followerid')->unsigned()->index();
            $table->integer('followingid')->unsigned()->index();


            $table->timestamps();
            $table->foreign('followerid')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('followingid')
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
