<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResultadoInteres;
use App\Models\Calculadora;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CalculadoraController extends Controller
{
    // Cálculo de interés compuesto con envío de correo
    public function calcularInteres(Request $request)
    {
        $request->validate([
            'capital' => 'required|numeric',
            'tasa' => 'required|numeric',
            'tiempo' => 'required|integer'
        ]);
        $calculadora = new Calculadora();
        $resultado = $calculadora->calcularInteresCompuesto(
            $request->input('capital'),
            $request->input('tasa'),
            $request->input('tiempo')
        );

        // Enviar el resultado por correo usando Mailtrap
        Mail::to('usuario@ejemplo.com')->send(new ResultadoInteres($resultado));

        return view('resultado', ['resultado' => $resultado]);
    }

    // Conversión de temperatura
    public function convertirTemperatura(Request $request)
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->convertirTemperatura(
            $request->input('grados'),
            $request->input('unidad')
        );

        return view('resultado', ['resultado' => $resultado]);
    }

    // Procesamiento de imagen con Intervention Image
    public function procesarImagen(Request $request)
    {
        $manager = new ImageManager(new Driver());

        if ($request->hasFile('imagen')) {
            $imagen = $manager->read($request->file('imagen')->getPathname());
            $imagen->resize(300, 200);
            $ruta_guardado = storage_path('app/public/images/imagen_procesada.jpg');
            $imagen->save($ruta_guardado);

            return redirect()->back()->with('success', 'Imagen procesada con éxito.');
        }

        return response()->json(['error' => 'No se subió ninguna imagen'], 400);
    }
}
