<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VideosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videostable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->integer('courceid')->unsigned()->index();
            $table->integer('ownerid')->index()->unsigned();



            $table->timestamps();
            $table->foreign('courceid')
                ->references('id')->on('courcestable')
                ->onDelete('cascade');
            $table->foreign('ownerid')
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
