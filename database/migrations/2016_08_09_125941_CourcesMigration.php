<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourcesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courcestable', function (Blueprint $table) {
            $table->increments('id');
           $table->string('name');
            $table->integer('categoryid')->unsigned()->index();
            $table->timestamps();
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
