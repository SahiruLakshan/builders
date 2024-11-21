<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::table('services', function (Blueprint $table) {
    //         //
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::table('services', function (Blueprint $table) {
    //         //
    //     });
    // }

    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            if (!Schema::hasColumn('services', 'status')) {
                $table->boolean('status')->default(1);
            }

            if (!Schema::hasColumn('services', 'updated_by')) {
                $table->unsignedBigInteger('updated_by')->nullable();
            }

            if (!Schema::hasColumn('services', 'updated_at')) {
                $table->timestamp('updated_at')->useCurrent();
            }
        });
    }

    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['status', 'updated_by']);

            if (Schema::hasColumn('services', 'updated_at')) {
                $table->dropColumn('updated_at');
            }
        });
    }


};
