<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
          $table->string('id');
          $table->string('user_id');
          $table->string('characteristics')->nullable();
          $table->string('concern')->nullable();
          $table->string('fatherInter')->nullable();
          $table->string('motherInter')->nullable();
          $table->string('siblingsInter')->nullable();
          $table->string('relativesInter')->nullable();
          $table->string('friendsInter')->nullable();
          $table->string('describeFather')->nullable();
          $table->string('describeMother')->nullable();
          $table->string('describeFamily')->nullable();
          $table->string('radioStrength')->nullable();
          $table->string('radioWeakness')->nullable();
          $table->string('decideEnroll')->nullable();
          $table->string('otherDecide')->nullable();
          $table->string('factorInfluenced')->nullable();
          $table->string('otherFactor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interviews');
    }
}
