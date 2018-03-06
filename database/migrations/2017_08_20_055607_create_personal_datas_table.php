<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_datas', function (Blueprint $table) {
          $table->string('id');
          $table->string('user_id');
          $table->string('firstName')->nullable();
          $table->string('middleName')->nullable();
          $table->string('lastName')->nullable();
          $table->string('dateOfBirth')->nullable();
          $table->string('placeOfBirth')->nullable();
          $table->integer('age')->unsigned()->nullable();
          $table->string('gender')->nullable();
          $table->string('civilStatus')->nullable();
          $table->string('nationality')->nullable();
          $table->string('religion')->nullable();
          $table->string('nameOfSpouse')->nullable();
          $table->string('spouseOccupation')->nullable();
          $table->integer('numberOfChildren')->nullable();
          $table->string('currentAddressNo')->nullable();
          $table->string('currentAddressStreet')->nullable();
          $table->string('currentAddressMun')->nullable();
          $table->string('currentAddressProv')->nullable();
          $table->string('permanentAddressNo')->nullable();
          $table->string('permanentAddressStreet')->nullable();
          $table->string('permanentAddressMun')->nullable();
          $table->string('permanentAddressProv')->nullable();
          $table->string('landline')->nullable()->nullable();
          $table->string('cellPhoneNo')->nullable();
          $table->string('doYouWork')->nullable();
          $table->string('nameOfFirm')->nullable();
          $table->string('addressOfFirm')->nullable();
          $table->string('sendsToSchool')->nullable();
          $table->string('sendName')->nullable();
          $table->string('sendRelation')->nullable();
          $table->string('sendOccupation')->nullable();
          $table->string('authName')->nullable();
          $table->string('authRelationship')->nullable();
          $table->string('authContact')->nullable();
          $table->string('authPermanentNo')->nullable();
          $table->string('authPermanentStreet')->nullable();
          $table->string('authPermanentMun')->nullable();
          $table->string('authPermanentProv')->nullable();
          $table->string('talents')->nullable();
          $table->string('curricular1')->nullable();
          $table->string('curricular2')->nullable();
          $table->string('curricular3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_datas');
    }
}
