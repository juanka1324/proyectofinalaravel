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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->string('color');
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('category_id'); // Añadimos la clave foránea
            $table->timestamps();

            // Definimos la relación con la tabla de categorías
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade'); // Eliminación en cascada si se borra la categoría
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
