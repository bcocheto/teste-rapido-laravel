<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index()
    {
        $soma = app('Funcoes')->soma(2, 3);
        $subtracao = app('Funcoes')->subtracao(5, 2);
        $multiplicacao = app('Funcoes')->multiplicacao(4, 5);
        $divisao = app('Funcoes')->divisao(10, 2);

        return view('CalculadoraView', [
            'soma' => $soma,
            'subtracao' => $subtracao,
            'multiplicacao' => $multiplicacao,
            'divisao' => $divisao,
        ]);
    }
}
