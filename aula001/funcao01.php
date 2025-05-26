<?php
$numero1 = 110;
$numero2 = 20;
function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
{
   return match($operacao) {
        'soma' => $numero1 + $numero2,
        'subtracao' => $numero1 - $numero2,
        'divisao' => $numero1 / $numero2,
        'multiplicacao' => $numero1 * $numero2,
   };
}

echo funcao01 . phpoperacaoMatematica($numero1, $numero2, "soma") . PHP_EOL;
echo funcao01 . phpoperacaoMatematica($numero1, $numero2, "subtracao") . PHP_EOL;
echo funcao01 . phpoperacaoMatematica($numero1, $numero2, "divisao") . PHP_EOL;
echo funcao01 . phpoperacaoMatematica($numero1, $numero2, "multiplicacao") . PHP_EOL;
