<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fees');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('addv_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('addv_id')->references('id')->on('adverticements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
