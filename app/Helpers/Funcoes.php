<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class Funcoes{
    function inverterString($string)
{
    return Str::reverse($string);
}

function mediaArray(array $numeros)
{
    if (empty($numeros)) {
        return 0;
    }

    $soma = 0;
    foreach ($numeros as $numero) {
        if (!is_int($numero)) {
            return 'Erro: O array deve conter apenas números inteiros.';
        }
        $soma += $numero;
    }

    return $soma / count($numeros);
}

public function soma($num1, $num2)
{
    return $num1 + $num2;
}

public function subtracao($num1, $num2)
{
    return $num1 - $num2;
}

public function multiplicacao($num1, $num2)
{
    return $num1 * $num2;
}

public function divisao($num1, $num2)
{
    return $num1 / $num2;
}

}
