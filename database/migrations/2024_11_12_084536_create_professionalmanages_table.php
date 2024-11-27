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
        Schema::create('professionalmanages', function (Blueprint $table) {
           


            $table->id();
            $table->string('professional_number')->unique();
            $table->string('name');
            $table->string('profile_image')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->date('dob')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('job_title')->nullable();
            $table->string('experience_level')->nullable();
            $table->integer('years_of_experience')->nullable();
            $table->text('skills')->nullable();
            $table->string('license_number')->nullable();
            $table->unsignedBigInteger('edited_by')->nullable(); // To store the user ID who last edited the record
            $table->timestamp('edited_at')->nullable(); // To store the time of the last edit
            $table->timestamps(); // includes created_at and updated_at
        
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionalmanages');
    }
};
