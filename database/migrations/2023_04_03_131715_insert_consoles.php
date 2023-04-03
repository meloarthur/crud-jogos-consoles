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
        DB::table('consoles')->insert([
            [
                'nome' => 'Playstation 3',
                'fabricante' => 'Sony'
            ],
            [
                'nome' => 'Playstation 4',
                'fabricante' => 'Sony'
            ],
            [
                'nome' => 'Playstation 5',
                'fabricante' => 'Sony'
            ],
            [
                'nome' => 'Xbox 360',
                'fabricante' => 'Microsoft'
            ],
            [
                'nome' => 'Xbox One',
                'fabricante' => 'Microsoft'
            ],
            [
                'nome' => 'Xbox Series X',
                'fabricante' => 'Microsoft'
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
