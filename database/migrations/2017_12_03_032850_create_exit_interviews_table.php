<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExitInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exit_interviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            $table->string('department')->nullable();
            $table->string('attendedOther')->nullable();
            $table->string('attracted')->nullable();
            $table->string('chooseToStudy')->nullable();
            $table->string('bestPartsOfPUNP')->nullable();
            $table->string('worstPartsOfPUNP')->nullable();
            $table->string('favoriteSubject')->nullable();
            $table->string('leastFavoriteSubject')->nullable();
            $table->string('likeBest')->nullable();
            $table->string('likeLeast')->nullable();
            $table->string('workWhileSchool')->nullable();
            $table->string('changesYouSuggest')->nullable();
            $table->string('bestInstructor')->nullable();
            $table->string('leastInstructor')->nullable();
            $table->string('immediatePlans')->nullable();
            $table->string('review')->nullable();
            $table->string('choosePUNP')->nullable();
            $table->string('comments')->nullable();
            $table->string('otherComments')->nullable();
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
        Schema::dropIfExists('exit_interviews');
    }
}
