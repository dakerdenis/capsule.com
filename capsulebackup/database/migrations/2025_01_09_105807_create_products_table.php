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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('code')->unique(); // Code of product (e.g., "123ABC")
            $table->date('verification_date')->nullable(); // Date of verification (nullable)
            $table->string('warranty')->nullable(); // Warranty (nullable)
            $table->tinyInteger('type')->unsigned(); // Type of product (1 to 5)
            $table->unsignedBigInteger('service_id')->nullable(); // Service ID (nullable)
            $table->timestamps(); // Created at and updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
