<?php
//Operadores logicos

// && Operador Logico (E)
//Verifica se ambas condicoes sao verdadeiras.

$idade = 18;
$temCarteira = false;

if($idade > 18 && $temCarteira){
    echo "Voce pode dirigir no Brasil";
}else{
    echo "Voce NAO pode dirigir no Brasil" . PHP_EOL;
}

// ||