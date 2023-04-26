<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use PDF;


class PDFController extends Controller
{
    //
    public function generatePDF()
{
    $data = [
        'title' => 'Mi primer archivo PDF generado en Laravel',
        'content' => '¡Hola, mundo!'
    ];

    $pdf = PDF::loadView('pdf.view', $data);
    return $pdf->download('mi-archivo.pdf');
}


}
