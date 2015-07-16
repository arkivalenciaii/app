<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlotUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slot_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slot_id')->unsigned;
            $table->integer('user_id')->unsigned;
            $table->foreign('slot_id')->references('id')->on('slots');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('slot_user');
    }
}
