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
            $table->string('DNI_client',9)->primary();
            $table->string('nom i cognoms',60);
            $table->integer('edat');
            $table->integer('telèfon');
            $table->string('adreça',60);
            $table->string('ciutat',40);
            $table->string('email',50);
            $table->integer('número del permís de conducció');
            $table->integer('punts del permís de conducció');
            $table->enum('tipus de targeta' ,['Dèbit','Crèdit']);
            $table->integer('número de la targeta');
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
