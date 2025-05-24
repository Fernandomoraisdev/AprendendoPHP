<?php
/*// Mensagem inicial
echo "Verificador de Ano Bissexto" . PHP_EOL;

// Solicita ao usuário que digite o ano
echo "Digite o ano: ";
$ano = (int) fgets(STDIN); // Lê e converte para inteiro

// Verifica se é bissexto
if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "O ano {$ano} é bissexto." . PHP_EOL;
} else {
    echo "O ano {$ano} não é bissexto." . PHP_EOL;
}
*/
$ano = 2024;

if(($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0){
    echo "$ano e bissexto.";
}else{
    echo "$ano nao e bissexto.";
}