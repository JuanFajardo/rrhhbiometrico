<?php

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

Route::middleware('auth')->group(function () {
    Route::resource('/Vehiculo' , 'App\Http\Controllers\VehiculoController');
    Route::get('/Vehiculo/{id}/activo' , 'App\Http\Controllers\VehiculoController@activo');
    Route::get('/Vehiculo/{id}/popular' , 'App\Http\Controllers\VehiculoController@popular');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Tienda/{busqueda}/Marca', [App\Http\Controllers\HomeController::class, 'show'])->name('home');

Route::get('/Tienda/{id}' , 'App\Http\Controllers\VehiculoController@show');
Route::get('/Tienda' , 'App\Http\Controllers\VehiculoController@tienda');