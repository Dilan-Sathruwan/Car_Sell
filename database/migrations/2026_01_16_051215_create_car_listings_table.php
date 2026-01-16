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
        Schema::create('car_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('make_id')->constrained('makes');
            $table->foreignId('model_id')->constrained('car_models');
            $table->integer('year');
            $table->integer('mileage');
            $table->decimal('price', 12, 2);
            $table->string('condition')->default('Used'); // New, Used
            $table->string('transmission'); // Automatic, Manual
            $table->string('fuel_type'); // Petrol, Diesel, Electric, Hybrid
            $table->string('body_type')->nullable();
            $table->string('color')->nullable();
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->default('active'); // active, sold, pending
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_listings');
    }
};
