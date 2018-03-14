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
            $table->string('id');
            $table->string('user_id')->nullable();
            $table->string('department')->nullable();
            $table->text('attendedOther')->nullable();
            $table->text('attracted')->nullable();
            $table->text('chooseToStudy')->nullable();
            $table->text('bestPartsOfPUNP')->nullable();
            $table->text('worstPartsOfPUNP')->nullable();
            $table->text('favoriteSubject')->nullable();
            $table->text('leastFavoriteSubject')->nullable();
            $table->text('likeBest')->nullable();
            $table->text('likeLeast')->nullable();
            $table->text('workWhileSchool')->nullable();
            $table->text('changesYouSuggest')->nullable();
            $table->text('bestInstructor')->nullable();
            $table->text('leastInstructor')->nullable();
            $table->text('immediatePlans')->nullable();
            $table->text('review')->nullable();
            $table->text('choosePUNP')->nullable();
            $table->text('comments')->nullable();
            $table->text('otherComments')->nullable();
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
