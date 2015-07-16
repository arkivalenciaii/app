<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExitSlotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exit_slot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slot_id')->unsigned();
            $table->integer('exit_id')->unsigned();
            $table->foreign('slot_id')->references('id')->on('slots');
            $table->foreign('exit_id')->references('id')->on('exits');
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
        Schema::drop('exit_slot');
    }
}
