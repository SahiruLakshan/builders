<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    // public function up()
    // {
    //     if (!Schema::hasTable('certifications')) {
    //         Schema::create('certifications', function (Blueprint $table) {
    //             $table->id();
    //             $table->unsignedBigInteger('professional_id');
    //             $table->string('certification_name');
    //             $table->string('issuing_authority');
    //             $table->date('date_issued')->nullable();
    //             $table->date('expiration_date')->nullable();
    //             $table->string('certification_pdf')->nullable();
    //             $table->timestamps();
    //         });
    //     }
    // }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professional_id')->constrained()->onDelete('cascade');
            $table->string('certification_name');
            $table->string('issuing_authority');
            $table->date('date_issued')->nullable();
            $table->date('expiration_date')->nullable();
            $table->string('certification_pdf')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
    //  */
    public function down(): void
    {
        Schema::dropIfExists('certifications');
    }
};
