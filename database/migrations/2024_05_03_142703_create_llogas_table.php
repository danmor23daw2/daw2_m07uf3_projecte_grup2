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
            $table->string("matricula_auto", 7);
            $table->foreign('matricula_auto')->references('matricula_auto')->on('autos')->onDelete('cascade');
            $table->string('DNI_client', 9);
            $table->foreign('DNI_client')->references('DNI_client')->on('clients')->onDelete('cascade');
            $table->primary(['matricula_auto', 'DNI_client']);
            $table->date('data_del_prestec');
            $table->date('data_de_devolucio');
            $table->string('lloc_de_devolucio', 50);
            $table->float('preu_per_dia');
            $table->string('email', 50);
            $table->enum('prestec_amb_retorn_de_diposit_ple', ['sí', 'no']);
            $table->enum("tipus_dassegurança", ['Franquícia fins a 1000 Euros', 'Franquíca fins 500 Euros', 'Sense franquícia']);
            $table->timestamps();

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
