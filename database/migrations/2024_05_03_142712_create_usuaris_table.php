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
        Schema::create('usuaris', function (Blueprint $table) {
            $table->string('nom_i_cognoms',60);
            $table->string('email')->unique();
            $table->string('contrasenya');
            $table->enum('tipus', ['treballador', 'cap_de_departament']);
            $table->time('darrera_hora_d_entrada');
            $table->time('darrera_hora_de_sortida');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuaris');
    }
};

