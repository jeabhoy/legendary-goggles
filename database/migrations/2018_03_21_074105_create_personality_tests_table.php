<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalityTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personality_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('section1PersonalityTest');
            $table->string('section2PersonalityTest');
            $table->string('section3PersonalityTest');
            $table->string('section4PersonalityTest');
            $table->string('personality');
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
        Schema::dropIfExists('personality_tests');
    }
}
