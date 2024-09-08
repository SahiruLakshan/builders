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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->integer('u_id');
            $table->string('email');
            $table->string('name');
            $table->string('whatsapp_number');
            $table->string('address');
            $table->string('city');
            $table->integer('profession_id');
            $table->string('grade');
            $table->string('experience');
            $table->longText('qualifications')->nullable();
            $table->string('project')->nullable();
            $table->string('skill')->nullable();
            $table->string('specialization')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
