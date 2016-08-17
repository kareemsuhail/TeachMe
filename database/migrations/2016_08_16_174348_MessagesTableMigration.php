<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MessagesTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messagestable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('senderid')->unsigned()->index();
            $table->mediumText('body');
            $table->integer('chatid')->unsigned()->index();
            $table->foreign('senderid')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('chatid')
                ->references('id')->on('chattable')
                ->onDelete('cascade');

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
        Schema::drop('messagestable');
    }
}
