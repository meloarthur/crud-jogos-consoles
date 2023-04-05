<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\MainController::class,'index'])->name('site.index');

Route::prefix('jogos')
    ->group(function(){
        Route::get('/', [\App\Http\Controllers\MainController::class,'jogos'])->name('site.jogos');

        Route::get('/cadastro', [\App\Http\Controllers\MainController::class,'cadastroJogos'])->name('site.cadastroJogos');
        Route::post('/cadastro', [\App\Http\Controllers\JogoController::class,'store']);

        Route::get('/atualizar/{id}', [\App\Http\Controllers\MainController::class,'atualizarJogos'])->name('site.atualizarJogos');
        Route::post('/atualizar/{id}', [\App\Http\Controllers\JogoController::class,'update']);
});

Route::get('/consoles', [\App\Http\Controllers\MainController::class,'consoles'])->name('site.consoles');
