<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_backgrounds', function (Blueprint $table) {
          $table->string('id');
          $table->string('user_id');
          $table->string('fatherName')->nullable();
          $table->string('fatherDeceased')->nullable();
          $table->string('fatherOccupation')->nullable();
          $table->string('fatherContactNo')->nullable();
          $table->string('motherName')->nullable();
          $table->string('motherDeceased')->nullable();
          $table->string('motherOccupation')->nullable();
          $table->string('motherContactNo')->nullable();
          $table->string('sibling1')->nullable();
          $table->integer('sibling1Age')->nullable();
          $table->string('sibling1EducationLevel')->nullable();
          $table->string('sibling2')->nullable();
          $table->integer('sibling2Age')->nullable();
          $table->string('sibling2EducationLevel')->nullable();
          $table->string('sibling3')->nullable();
          $table->integer('sibling3Age')->nullable();
          $table->string('sibling3EducationLevel')->nullable();
          $table->string('sibling4')->nullable();
          $table->integer('sibling4Age')->nullable();
          $table->string('sibling4EducationLevel')->nullable();
          $table->string('physicalProblems')->nullable();
          $table->string('allergies')->nullable();
          $table->string('treatmentSought')->nullable();
          $table->string('medicineTaken')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_backgrounds');
    }
}
