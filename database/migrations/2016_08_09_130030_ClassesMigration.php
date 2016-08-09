<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classestable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('teacherid')->index()->unsigned();
            $table->integer('categoryid')->index()->unsigned();
            $table->mediumText('description');

            $table->timestamps();
            $table->foreign('teacherid')
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
