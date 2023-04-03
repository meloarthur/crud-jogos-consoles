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
        DB::table('jogos_consoles')->insert([
            [
                'id_jogos' => 1,
                'id_consoles' => 1
            ],
            [
                'id_jogos' => 1,
                'id_consoles' => 2
            ],
            [
                'id_jogos' => 1,
                'id_consoles' => 3
            ],
            [
                'id_jogos' => 2,
                'id_consoles' => 2
            ],
            [
                'id_jogos' => 3,
                'id_consoles' => 2
            ],
            [
                'id_jogos' => 3,
                'id_consoles' => 3
            ],
            [
                'id_jogos' => 3,
                'id_consoles' => 5
            ],
            [
                'id_jogos' => 3,
                'id_consoles' => 6
            ],
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
