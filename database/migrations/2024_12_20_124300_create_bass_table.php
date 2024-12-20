<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bass', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique(); // PR00001
            $table->string('nic');
            $table->string('fullname');
            $table->string('nic_image');
            $table->string('back_nic_image');
            $table->string('profile_image'); // Added profile image field
            $table->string('telephone_number')->nullable();
            $table->string('phone_number');
            $table->string('b_email')->unique();
            $table->text('b_address');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('city_id');
            $table->string('zip')->nullable();
            $table->date('dob')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('jobTitle');
            $table->string('experienceLevel');
            $table->integer('yearsOfExperience')->nullable();
            $table->text('skills')->nullable();
            $table->json('specialization')->nullable();
            $table->json('workingArea')->nullable();
            $table->json('certfication_details')->nullable();
            $table->json('certifications')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bass');
    }
};