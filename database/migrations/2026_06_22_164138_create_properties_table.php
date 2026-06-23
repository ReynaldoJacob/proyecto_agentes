<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->constrained('users')->onDelete('cascade');

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            $table->enum('type', ['casa', 'terreno', 'departamento'])->default('casa');
            $table->enum('operation_type', ['venta', 'preventa', 'renta_vacacional', 'renta_anual'])->default('venta');
            $table->enum('status', ['disponible', 'vendido', 'rentado', 'reservado'])->default('disponible');

            $table->decimal('price', 14, 2);
            $table->string('currency', 3)->default('USD');

            $table->unsignedSmallInteger('bedrooms')->nullable();
            $table->decimal('bathrooms', 3, 1)->nullable();
            $table->unsignedSmallInteger('parking_spaces')->nullable();
            $table->decimal('area', 10, 2)->nullable();
            $table->decimal('land_area', 10, 2)->nullable();

            $table->string('address')->nullable();
            $table->string('city')->default('Mazatlán');
            $table->string('state')->default('Sinaloa');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();

            $table->string('cover_image')->nullable();
            $table->json('images')->nullable();
            $table->json('features')->nullable();

            // Preventa
            $table->date('delivery_date')->nullable();
            $table->unsignedTinyInteger('construction_progress')->nullable();

            // Renta vacacional
            $table->unsignedSmallInteger('min_nights')->nullable();
            $table->unsignedSmallInteger('max_nights')->nullable();

            $table->unsignedSmallInteger('year_built')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
