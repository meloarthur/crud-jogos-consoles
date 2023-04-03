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
        DB::table('jogos')->insert([
            [
                'nome' => 'The Last of Us',
                'descricao' => 'Um homem e uma criança lutando para salvar a humanidade',
                'imagem_capa' => 'capa_tlou.png',
                'fabricante' => 'Naughty Dog',
                'ano_lancamento' => 2013,
                'faturamento' => 80000000
            ],
            [
                'nome' => 'God of War',
                'descricao' => 'Deus da Guerra grego vivendo no mundo nórdico',
                'imagem_capa' => 'capa_gow.png',
                'fabricante' => 'Santa Monica',
                'ano_lancamento' => 2018,
                'faturamento' => 42000000
            ],
            [
                'nome' => 'Resident Evil 4 Remake',
                'descricao' => 'Leon indo salvar a filha do presidente',
                'imagem_capa' => 'capa_re4.png',
                'fabricante' => 'Capcom',
                'ano_lancamento' => 2023,
                'faturamento' => 13000000
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
