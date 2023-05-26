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
        Schema::create('general', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('email');
            $table->string('applicationType');
            $table->string('passportNumber');
            $table->string('passportBookletType');
            $table->string('title');
            $table->string('surname');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('dob');
            $table->string('placeOfBirth');
            $table->string('gender');
            $table->string('maritalStatus');
            $table->string('occupation');
            $table->string('motherMaidenName');
            $table->string('ninNumber');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general');
    }
};
