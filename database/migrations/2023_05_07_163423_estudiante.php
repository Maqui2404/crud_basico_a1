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
        //
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('e_id');
            $table->string('e_nombres');
            $table->string('e_apellidos');
            $table->string('e_dni');
            $table->unsignedInteger('e_edad');
            $table->date('e_fecha_nac');
            $table->string('e_facultad');
            $table->string('e_escuela');
            $table->string('e_semestre');
            $table->string('e_codigo');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
