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
        Schema::create('universidads', function (Blueprint $table) {
            $table->id('ID_Universidad');
            $table->String('Nombre_Universidad');
            $table->String('Correo_Universidad');
            $table->String('Descripcion_Universidad');
            $table->integer('Estado_Universidad');
            $table->Time('Hora_Apertura_Universidad');
            $table->Time('Hora_Cierre_Universidad');
            $table->String('Direccion_Universidad');
            $table->Int('Telefono_Universidad');
            $table->String('PaginaWeb_Universidad');
            $table->String('Foto_de_perfil_Universidad');
            $table->String('Foto_de_portada_Universidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universidads');
    }
};
