<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dd', [App\Http\Controllers\HomeController::class, 'produtosusuarios'])->name('dd');

Route::resource('produtos', App\Http\Controllers\ProdutoController::class);

Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);