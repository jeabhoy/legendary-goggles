<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('level')->nullable();
            $table->integer('semester')->nullable();
            $table->string('schoolYear')->nullable();
            $table->string('section')->nullable();
            $table->string('strand')->nullable();
            $table->string('course')->nullable();
            $table->string('email')->nullable();
            $table->string('year')->nullable();
            $table->string('fullName')->nullable();
            $table->string('avatar')->nullable();
            $table->string('status')->nullable();
            $table->string('cummulativeRecordTaken')->nullable();
            $table->string('exitInterviewTaken')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(['id' => 1, 'username' => 'punp', 'password' => Hash::make('punp'), 'level' => 'Admin', 'fullName' => 'testAdmin', 'avatar' => 'defaultAvatar.png', 'email' => 'admin@gmail.com']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
