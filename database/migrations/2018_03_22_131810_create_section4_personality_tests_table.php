<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSection4PersonalityTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section4_personality_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('row1');
            $table->string('row2');
            $table->string('row3');
            $table->string('row4');
            $table->string('row5');
            $table->string('row6');
            $table->string('row7');
            $table->string('row8');
            $table->string('row9');
            $table->string('row10');
            $table->string('row11');
            $table->string('row12');
            $table->string('row13');
            $table->string('row14');
            $table->string('row15');
            $table->string('row16');
            $table->string('row17');
            $table->string('row18');
            $table->string('row19');
            $table->string('row20');
            $table->string('row21');
            $table->string('row22');
            $table->string('row23');
            $table->string('row24');
            $table->string('row25');
            $table->string('row26');
            $table->string('row27');
            $table->string('row28');
            $table->string('row29');
            $table->string('row30');
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
        Schema::dropIfExists('section4_personality_tests');
    }
}
