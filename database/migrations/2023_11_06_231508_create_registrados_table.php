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
        Schema::create('registrados', function (Blueprint $table) {
            $table->id();
            $table->integer('id_solicitud');
            $table->string('num_cta',9);
            $table->datetime('dgae_fet');
            $table->string('dgae_carrera',7);
            $table->string('dgae_orientacion',2);
            $table->string('dgae_nivel',2);
            $table->string('sep_clave',6);
            $table->string('siae_area',11);
            $table->string('siae_carrera',3);
            $table->string('siae_plantel',4);
            $table->string('siae_planestudios',4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrados');
    }
};
