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
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->string('professional_number')->unique();
            $table->string('name');
            $table->string('profile_image')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->date('dob')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('job_title');
            $table->string('experience_level');
            $table->integer('years_of_experience')->nullable();
            $table->text('skills')->nullable();
            $table->string('license_number')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionals');
    }
};
