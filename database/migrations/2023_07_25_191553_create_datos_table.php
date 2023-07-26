<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_datos_table.php
public function up()
{
    Schema::create('datos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('email');
        // Agrega más columnas según la estructura de tu archivo Excel
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos');
    }
    
};