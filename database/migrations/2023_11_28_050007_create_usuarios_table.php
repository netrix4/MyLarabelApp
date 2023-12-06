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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('IdU')->uniqid();
            $table->string('nombreU') ;
            $table->string('apapU');
            $table->string('apamU');
            $table->string('telU');
            $table->string('nombreM');
            $table->string('direccion');
            $table->string('TipoDeUsuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
