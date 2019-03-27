<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('full_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->string('token');
            $table->string('user_role');
            $table->string('status');
            $table->string('file_name');            
            $table->string('file_type');
            $table->string('file_path');
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('full_name');
            $table->dropColumn('last_name');
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('user_role');
            $table->datetime('deleted_at');
        });
    }
}
