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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('DNI_client', 9)->primary();
            $table->string('nom_i_cognoms', 60);
            $table->integer('edat');
            $table->integer('telefon');
            $table->string('adreça', 60);
            $table->string('ciutat', 40);
            $table->string('email', 50);
            $table->integer('numero_del_permis_de_conduccio');
            $table->integer('punts_del_permis_de_conduccio');
            $table->enum('tipus_de_targeta', ['Dèbit', 'Crèdit']);
            $table->integer('numero_de_la_targeta');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};



