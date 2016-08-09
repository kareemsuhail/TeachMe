<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RequestsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requeststable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('senderid')->unsigned()->index();
            $table->integer('receiverid')->unsigned()->index();
            $table->string('type') ;


            $table->timestamps();
            $table->foreign('senderid')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('receiverid')
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
