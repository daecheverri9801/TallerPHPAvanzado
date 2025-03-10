<?php

use App\Http\Controllers\CalculadoraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('formulario');
});

Route::post('/calcular-interes', [CalculadoraController::class, 'calcularInteres']);
Route::post('/convertir-temperatura', [CalculadoraController::class, 'convertirTemperatura']);
Route::post('/procesar-imagen', [CalculadoraController::class, 'procesarImagen']);
