<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldAdvertice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adverticements', function (Blueprint $table) {
            $table->integer('user_sub_id')->unsigned();
            $table->datetime('deleted_at')->nullable();
            $table->foreign('user_sub_id')->references('id')->on('user_subcriptions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adverticements', function (Blueprint $table) {
            
            $table->dropColumn('user_sub_id');
            $table->dropColumn('deleted_at');
        });
    }
}
