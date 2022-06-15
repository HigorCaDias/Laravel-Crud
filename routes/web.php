<?php

use App\Http\Controllers\tabelaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Chamando a função do controller
Route::get('/', [tabelaController::class, 'buscaMarcaProduto'])->name('dbBanco');
Route::post('/cadastroMarca', [tabelaController::class, 'cadastroMarca']);
Route::post('/cadastroProduto', [tabelaController::class, 'cadastroProduto']);
/* Para especificar a solicitação sempre se passa o id na URL da Rota */
Route::delete('/cadastroDeletarMarca/{id}', [tabelaController::class, 'cadastroDeletarMarca']);
Route::get('/edit/{id}', [tabelaController::class, 'edit']);
Route::post('/update/{id}', [tabelaController::class, 'update']);

