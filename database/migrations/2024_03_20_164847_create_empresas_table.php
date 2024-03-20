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
        Schema::create('empresas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre')->unique();
        $table->text('direccion')->nullable();
        $table->string('correo_electronico')->unique()->nullable();
        $table->string('numero_telefonico')->nullable();
        //$table->string('logo')->nullable(); // Asegúrate de validar el tamaño de la imagen en la lógica de tu aplicación.
        $table->string('sitio_web')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
