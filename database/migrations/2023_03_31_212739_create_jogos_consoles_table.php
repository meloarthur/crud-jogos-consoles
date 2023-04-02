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
        Schema::create('jogos_consoles', function (Blueprint $table) {
            $table->id('id_jogos_consoles');
            $table->unsignedBigInteger('id_jogos');
            $table->unsignedBigInteger('id_consoles');
            $table->timestamps();

            $table->foreign('id_jogos')->references('id_jogos')->on('jogos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_consoles')->references('id_consoles')->on('consoles')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogo_consoles');
    }
};
