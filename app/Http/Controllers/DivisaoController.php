<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisaoController extends Controller
{
    public function index(Request $request, $numero1, $numero2)
    {
        try {
            if ($numero2 == 0) {
                throw new \Exception('Divisão por zero!');
            }

            $resultado = $numero1 / $numero2;

            return view('DivisaoView', ['resultado' => $resultado]);
        } catch (\Exception $e) {
            return view('DivisaoView', ['erro' => $e->getMessage()]);
        }
    }
}
