<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculadora;

class CalculadoraController extends Controller
{
    public function calcularInteres(Request $request)
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcularInteresCompuesto(
            $request->input('capital'),
            $request->input('tasa'),
            $request->input('tiempo')
        );
        return view('resultado', ['resultado' => $resultado]);
    }

    public function convertirTemperatura(Request $request)
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->convertirTemperatura(
            $request->input('grados'),
            $request->input('unidad')
        );
        return view('resultado', ['resultado' => $resultado]);
    }
}
