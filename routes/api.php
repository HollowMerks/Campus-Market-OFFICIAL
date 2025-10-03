<?php
use Illuminate\Support\Facades\Route;

Route::get('/prueba', function () {
    return response()->json(['mensaje' => 'API funcionando ✅']);
});

Route::get('/alumnos', [AlumnoController::class, 'index']);
Route::get('/universidades', [UniversidadController::class, 'index']);


