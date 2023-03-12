<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lib_users', function (Blueprint $table) {
            $table->increments('id');
            $table->String('user_type');
            $table->integer('role');
        });

        DB::table('lib_users')->insert(array('user_type' => 'admin','role' => '0'));
        DB::table('lib_users')->insert(array('user_type' => 'superadmin','role' => '1'));
        DB::table('lib_users')->insert(array('user_type' => 'member','role' => '2'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lib_users');
    }
};
