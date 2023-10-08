<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\FaltaController;

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
    return view('yesica');
});

Auth::routes();
Route::resource('personas', PersonaController::class);
Route::resource('cargos', CargoController::class);
Route::resource('horarios', HorarioController::class);
Route::resource('historias', HistoriaController::class);
Route::resource('faltas', FaltaController::class);
