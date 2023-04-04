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
});

Route::get('/consoles', [\App\Http\Controllers\MainController::class,'consoles'])->name('site.consoles');
