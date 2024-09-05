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
        Schema::create('shop_product', function (Blueprint $table) {
            $table->id();
            $table->integer('shop_id');
            $table->string('product_name');
            $table->integer('subcategory_id');
            $table->integer('product_id');
            $table->integer('brand_id');
            $table->integer('product_category_id');
            $table->integer('measurement_id');
            $table->float('unit_price');
            $table->float('quantity');
            $table->string('other')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_product');
    }
};
