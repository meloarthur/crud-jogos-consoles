<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Rotas de Jogos */
Route::get('/jogos', [App\Http\Controllers\JogoController::class, 'index']);
Route::get('/jogos/{id}', [App\Http\Controllers\JogoController::class, 'show']);
Route::post('/jogos', [App\Http\Controllers\JogoController::class, 'store']);

/* Rotas de Consoles */
Route::get('/consoles', [App\Http\Controllers\ConsoleController::class, 'index']);
Route::get('/consoles/{id}', [App\Http\Controllers\ConsoleController::class, 'show']);
Route::post('/consoles', [App\Http\Controllers\ConsoleController::class, 'store']);

/* Rotas de Consoles dos Jogos */
Route::get('/jogos-consoles', [App\Http\Controllers\JogoController::class, 'index']);
Route::get('/jogos-consoles/{id}', [App\Http\Controllers\JogoController::class, 'show']);
Route::post('/jogos-consoles', [App\Http\Controllers\JogoController::class, 'store']);
