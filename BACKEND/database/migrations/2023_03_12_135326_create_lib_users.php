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
        Schema::create('lib_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
        });

        DB::table('lib_user')->insert(array('role' => 'admin'));
        DB::table('lib_user')->insert(array('role' => 'superadmin'));
        DB::table('lib_user')->insert(array('role' => 'member'));
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
