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
        Schema::create('jogos', function (Blueprint $table) {
            $table->id('jogos_id');
            $table->string('nome', 200);
            $table->string('descricao', 4000);
            $table->string('imagem_capa', 200);
            $table->string('fabricante', 200);
            $table->string('console', 200);
            $table->integer('ano_lancamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogos');
    }
};
