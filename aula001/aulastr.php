<?php
$nome = "Fernando Morais";

$ehDaMinhaFamilia = str_contains($nome, "Morais");

if ($ehDaMinhaFamilia){
    echo "$nome e da minha familia" .  PHP_EOL;
}else{
    echo "$nome nao e da minha familia" .  PHP_EOL;
}