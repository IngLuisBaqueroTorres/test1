<?php

use App\Http\Controllers\ProvedoresController;
use App\Http\Controllers\Select2SearchController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vendedores', [ProvedoresController::class, 'getProvedores'] )->name('socios');

Route::get('/vendedores/{id}', [ProvedoresController::class, 'show'] )->name('socios.show');

Route::get('/productos/{user_id}', [ProvedoresController::class, 'getProductos'] )->name('productos.show');

Route::get('/vendedores/{city}/{category}', [Select2SearchController::class, 'showProductsActive']);

Route::get('/producto/{id}', [ProvedoresController::class, 'getProducto'] )->name('producto.show');
