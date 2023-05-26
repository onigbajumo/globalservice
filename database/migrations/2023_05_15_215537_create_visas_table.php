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
        Schema::create('visas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nationality');
            $table->string('passport_type');
            $table->string('visa_type');
            $table->string('visa_class');
            $table->string('title');
            $table->string('surname');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('dob');
            $table->string('pofB');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('emailAddress');
            $table->string('phoneNumber');
            $table->string('passportNumber');
            $table->string('passportExpiryDate');
            $table->string('previousNationality');
            $table->string('occupation');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visas');
    }
};
