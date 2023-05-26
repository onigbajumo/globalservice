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
        Schema::create('passport', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('email');
            $table->string('title');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->integer('contactNumber');
            $table->string('maritalStatus');
            $table->string('hairColor');
            $table->string('eyeColor');
            $table->string('identificationMarks');
            $table->integer('height');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passport');
    }
};
