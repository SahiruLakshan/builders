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
        if (!Schema::hasTable('service_providers')) {
            Schema::create('service_providers', function (Blueprint $table) {
                $table->id();
                $table->string('s_name');
                $table->string('grade');
                $table->text('address');
                $table->unsignedBigInteger('category_id');
                $table->unsignedBigInteger('district_id');
                $table->unsignedBigInteger('city_id');
                $table->string('telephone')->nullable();
                $table->string('mobile');
                $table->string('whatsapp')->nullable();
                $table->string('company_name');
                $table->string('business_reg_no');
                $table->integer('no_of_employees');
                $table->string('employees_qualification')->nullable();
                $table->string('max_project_value')->nullable();
                $table->timestamps();
            });
        }
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

