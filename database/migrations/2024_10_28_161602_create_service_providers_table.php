<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id();
            $table->string('s_name'); // Service provider's name
            $table->string('grade'); // Grade of the service provider
            $table->text('address'); // Address
            $table->unsignedBigInteger('category_id'); // Foreign key for category
            $table->unsignedBigInteger('district_id'); // Foreign key for district
            $table->unsignedBigInteger('city_id'); // Foreign key for city
            $table->string('telephone')->nullable(); // Telephone (optional)
            $table->string('mobile'); // Mobile number
            $table->string('whatsapp')->nullable(); // WhatsApp number (optional)
            $table->string('company_name'); // Company name
            $table->string('business_reg_no'); // Business registration number
            $table->integer('no_of_employees'); // Number of employees
            $table->string('employees_qualification')->nullable(); // Employees' qualification
            $table->string('max_project_value')->nullable(); // Maximum project value
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_providers');
    }
}

