<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('n_i_n_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('email'); 
            $table->integer('bvn');
            $table->integer('appointmentDate');
            $table->string('appointmentLocation');
            $table->integer('appointmentTime');
            $table->integer('ukMobileNumber');
            $table->string('title');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName'); 
            $table->string('otherName');
            $table->string('maidenName');
            $table->string('permanentAddress');
            $table->integer('dob');
            $table->string('countryOfBirth');
            $table->string('stateOfBirth'); 
            $table->string('stateOfOrigin');
            $table->string('lgaOfOrigin');
            $table->string('townOfOrigin');
            $table->integer('gender');
            $table->integer('height');
            $table->string('nationality');
            $table->string('residenceStatus');
            $table->string('maritalStatus');
            $table->string('religion');
            $table->integer('telephoneNumber');
            $table->string('guardianSurname');
            $table->string('guardianFirstName');
            $table->string('guardianMiddleName');
            $table->string('guardianNin');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_i_n_s');
    }
};
