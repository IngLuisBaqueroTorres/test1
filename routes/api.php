<?php

use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Userproductcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Select2SearchController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//todos los usuarios
Route::resource('providers', Usercontroller::class,['only' => ['index','show']])->middleware('CORS');
//productos de un usuario
Route::resource('providers.products', Userproductcontroller::class,['only' => ['index']]);
//ruta de producto
Route::resource('products', Productcontroller::class,['only' => ['index','show']]);
//ruta de busqueda
Route::get('/search', [Select2SearchController::class, 'index']);
//ruta para autocompletar lugares
Route::get('/ajax-autocomplete-search', [Select2SearchController::class, 'selectSearchPlace']);
//ruta para autocompletar categorias
Route::get('/ajax-autocomplete-categories', [Select2SearchController::class, 'selectSearchCategory']);




