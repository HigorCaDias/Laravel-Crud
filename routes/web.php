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
