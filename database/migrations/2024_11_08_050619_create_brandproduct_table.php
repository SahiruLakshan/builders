<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brandproduct', function (Blueprint $table) {
            // $table->id();
            // $table->unsignedBigInteger('brand_id');
            // $table->unsignedBigInteger('product_id');
            // $table->unsignedBigInteger('created_by'); // Field to store the creator's ID
            // $table->timestamps();
            $table->id();  // Auto-incrementing ID
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('created_by'); // Assuming this is the user who created the entry
            $table->timestamps(); // created_at and updated_at fields

            // // Optionally, add indexes
            // $table->index('brand_id');
            // $table->index('product_id');
            // $table->index('created_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brandproduct');
    }
};
