<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\FaltaController;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('yesica');
    });
    
    Route::resource('personas', PersonaController::class);
    Route::get('personas/{id}/activo', 'App\Http\Controllers\PersonaController@destroy')->name('persona.activo');

    Route::resource('cargos', CargoController::class);
    Route::resource('horarios', HorarioController::class);
    Route::resource('historias', HistoriaController::class);
    Route::post('historia/cargado', [HistoriaController::class, 'cargado'])->name('historial.cargado');
    Route::post('historia/reporte', [HistoriaController::class, 'reporte'])->name('historial.reporte');
    
    
    Route::resource('faltas', FaltaController::class);
    Route::resource('usuarios', UserController::class);
});

