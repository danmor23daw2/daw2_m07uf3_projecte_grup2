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
            $table->integer('número de bastidor');
            $table->string('marca',30);
            $table->string('model',30);
            $table->string('color',20);
            $table->integer('nombre de places');
            $table->integer('nombre de portes');
            $table->integer('grandària del maleter');
            $table->enum('tipus de combustible',['gasolina','diesel','elèctric']);
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
