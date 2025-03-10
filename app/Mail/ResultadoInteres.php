<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResultadoInteres extends Mailable
{
    use Queueable, SerializesModels;

    public $resultado;

    public function __construct($resultado)
    {
        $this->resultado = $resultado;
    }

    public function build()
    {
        return $this->subject('Resultado de Cálculo')
            ->view('emails.resultado_interes')
            ->with(['resultado' => $this->resultado]);
    }
}
