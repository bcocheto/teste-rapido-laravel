<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InverterStringController extends Controller
{
    public function index()
    {
        $textoOriginal = "Olá, mundo!";
        $textoInvertido = app('Funcoes')->inverterString($textoOriginal);

        return view('inverterStringView', compact('textoOriginal', 'textoInvertido'));
    }
}
