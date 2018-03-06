<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_backgrounds', function (Blueprint $table) {
          $table->string('id');
          $table->string('user_id');
          $table->string('elemNameOfSchool')->nullable();
          $table->string('elemAddressOfSchool')->nullable();
          $table->string('elemYearsOfAttendance')->nullable();
          $table->string('highNameOfSchool')->nullable();
          $table->string('highAddressOfSchool')->nullable();
          $table->string('highYearsOfAttendance')->nullable();
          $table->string('collegeNameOfSchool')->nullable();
          $table->string('collegeAddressOfSchool')->nullable();
          $table->string('collegeYearsOfAttendance')->nullable();
          $table->string('gradNameOfSchool')->nullable();
          $table->string('gradAddressOfSchool')->nullable();
          $table->string('gradYearsOfAttendance')->nullable();
          $table->string('subjectExcel')->nullable();
          $table->string('subjectLeast')->nullable();
          $table->string('awardsReceived')->nullable();
          $table->string('firstPriority')->nullable();
          $table->string('secondPriority')->nullable();
          $table->string('thirdPriority')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educational_backgrounds');
    }
}
