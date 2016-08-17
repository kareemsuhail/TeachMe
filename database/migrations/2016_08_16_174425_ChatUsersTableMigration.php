<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChatUsersTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatuserstable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->unsigned()->index();
            $table->integer('chatid')->unsigned()->index();

            $table->timestamps();
            $table->foreign('userid')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('chatid')
                ->references('id')->on('chattable')
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
        Schema::drop('chatuserstable');
    }
}
