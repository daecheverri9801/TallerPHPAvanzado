<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::get('/', function () {
    return view('formulario');
});

Route::post('/calcular-interes', [CalculadoraController::class, 'calcularInteres']);
Route::post('/convertir-temperatura', [CalculadoraController::class, 'convertirTemperatura']);
