<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassLectures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classlecturestable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classid')->unsigned()->index();
            $table->string('type');
            $table->string('url');

            $table->timestamps();
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
