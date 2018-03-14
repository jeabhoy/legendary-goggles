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
          $table->text('characteristics')->nullable();
          $table->text('concern')->nullable();
          $table->string('fatherInter')->nullable();
          $table->string('motherInter')->nullable();
          $table->string('siblingsInter')->nullable();
          $table->string('relativesInter')->nullable();
          $table->string('friendsInter')->nullable();
          $table->text('describeFather')->nullable();
          $table->text('describeMother')->nullable();
          $table->text('describeFamily')->nullable();
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
