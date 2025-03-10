<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    public function calcularInteresCompuesto($capital, $tasa, $tiempo)
    {
        return $capital * pow((1 + $tasa / 100), $tiempo);
    }

    public function convertirTemperatura($grados, $unidad)
    {
        if ($unidad === 'C') {
            return ($grados * 9 / 5) + 32; // Celsius a Fahrenheit
        } elseif ($unidad === 'F') {
            return ($grados - 32) * 5 / 9; // Fahrenheit a Celsius
        }
        return null;
    }
}
