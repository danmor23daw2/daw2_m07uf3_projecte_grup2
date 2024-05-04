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
        Schema::create('autos', function (Blueprint $table) {
            $table->string('matricula_auto',7)->primary();
            $table->integer('numero_de_bastidor');
            $table->string('marca',30);
            $table->string('model',30);
            $table->string('color',20);
            $table->integer('nombre_de_places');
            $table->integer('nombre_de_portes');
            $table->integer('grandaria_del_maleter');
            $table->enum('tipus_de_combustible',['gasolina','diesel','elèctric']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autos');
    }
};
