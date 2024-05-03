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
        Schema::create('llogas', function (Blueprint $table) {
            $table->string('DNI_client', 9);
            $table->string("matricula_auto", 7);
            $table->date('data del préstec');
            $table->date('data de devolució');
            $table->string('lloc de devolució', 50);
            $table->float('preu per dia');
            $table->string('email', 50);
            $table->enum('préstec amb retorn de dipòsit ple', ['sí', 'no']);
            $table->enum("tipus d'assegurança", ['Franquícia fins a 1000 Euros', 'Franquíca fins 500 Euros', 'Sense franquícia']);
            
            $table->primary(['DNI_client', 'matricula_auto']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llogas');
    }
};
