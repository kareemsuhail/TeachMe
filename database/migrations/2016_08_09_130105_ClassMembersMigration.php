<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassMembersMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classmemberstable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->index()->unsigned();
            $table->integer('classid')->index()->unsigned();


            $table->timestamps();
            $table->foreign('userid')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('classid')
                ->references('id')->on('classestable')
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
