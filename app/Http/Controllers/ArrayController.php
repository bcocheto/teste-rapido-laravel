<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function index(){
        $tamanhoArray = 10;
        $limiteAleatorio = 100;

        $numeros = [];
        for ($i = 0; $i < $tamanhoArray; $i++) {
            $numeros[] = rand(1, $limiteAleatorio);
        }

        $media = app('Funcoes')->mediaArray($numeros);

        return view('ArrayView', compact('numeros', 'media'));
    }
}
