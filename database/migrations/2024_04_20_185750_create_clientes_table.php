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
        Schema::create('clientes', function (Blueprint $table) {

            $table->String('usuario')->nullable();
            $table->String('primernombre',120);
            $table->String('segundonombre',120);
            $table->String('primerapellido',120);
            $table->String('segundoapellido',120);
            $table->date('fecha_nacimiento');
            $table->enum('genero',['masculino','femenino','otro']);
            $table->String('tipoDocumento');
            $table->String('telefono',20);
            $table->String('email',50);
            $table->unsignedBigInteger('dato_id');
            $table->timestamps();

            $table->foreign('dato_id')->references('id')->on('datos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
