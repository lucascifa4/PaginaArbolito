<?php

use App\Http\Controllers\UsuarioController;

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

//Route::get('/', function () { return view('pagina'); })->name('welcome');

    
Route::get('/', [UsuarioController::class, 'index'])->name('index');

Route::get('/create-voto', [UsuarioController::class, 'create'])->name('create.voto');
Route::post('/store-voto', [UsuarioController::class, 'storeVoto'])->name('store.voto');

