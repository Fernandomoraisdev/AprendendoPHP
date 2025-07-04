<?php

$saldo = 1_000;
$titular = "Fernando Morais";

echo "***************************" . PHP_EOL;
echo "Titular: $titular" . PHP_EOL;
echo "Saldo: R$ $saldo" . PHP_EOL;
echo "*****************************" . PHP_EOL;

do {
    echo "#1 - Consultar saldo atual" . PHP_EOL;
    echo "#2 - Sacar valor" . PHP_EOL;
    echo "#3 - Depositar valor" . PHP_EOL;
    echo "#4 - Sair" . PHP_EOL;

    $opcao = (float)fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "***************************" . PHP_EOL;
            echo "Titular: $titular" . PHP_EOL;
            echo "Saldo: R$ $saldo" . PHP_EOL;
            echo "*****************************" . PHP_EOL;
            break;

        case 2:
            echo "Qual valor deseja sacar?" . PHP_EOL;
            $valorASacar = (float)fgets(STDIN);
            if ($valorASacar > $saldo) {
                echo "Saldo insuficiente!" . PHP_EOL;
            } else {
                $saldo -= $valorASacar;
            }
            break;
        case 3:
            echo "Quanto deseja depositar?" . PHP_EOL;
            $valorADepositar = (float)fgets(STDIN);
            $saldo += $valorADepositar;
            break;

        case 4:
            echo "Ate logo";
            break;
        default:
            echo "Opcao invalida!" . PHP_EOL;
            break;
    }
}while($opcao != 4);