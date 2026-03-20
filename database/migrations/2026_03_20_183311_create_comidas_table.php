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
        Schema::create('comidas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->boolean('Disponibilidad');
            $table->double('Precio');
            $table->string('Descripcion');
            $table->string('Tipo de comida');
            $table->string('Categoria');
            $table->boolean('Stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comidas');
    }
};
