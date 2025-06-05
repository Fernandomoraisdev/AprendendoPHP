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
        default => throw new InvalidArgumentException("Operação inválida: " . $operacao),
    };
}

// Chamadas corretas (sem o "php" antes do nome da função)
echo operacaoMatematica($numero1, $numero2, "soma") . PHP_EOL;
echo operacaoMatematica($numero1, $numero2, "subtracao") . PHP_EOL;
echo operacaoMatematica($numero1, $numero2, "divisao") . PHP_EOL;
echo operacaoMatematica($numero1, $numero2, "multiplicacao") . PHP_EOL;