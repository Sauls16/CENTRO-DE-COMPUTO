<?php

use Illuminate\Support\Facades\Route;
use App\Models\Equipo;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\MantenimientoController;

Route::get('/', function () {
    $equiposCriticos = Equipo::where('estado', 'En mantenimiento')->get();
    $ultimosEquipos = Equipo::orderBy('updated_at', 'desc')->take(4)->get();
    return view('welcome', compact('equiposCriticos', 'ultimosEquipos'));
});

Route::resource('equipos', EquipoController::class);
Route::resource('ubicaciones', UbicacionController::class);
Route::resource('mantenimientos', MantenimientoController::class);
