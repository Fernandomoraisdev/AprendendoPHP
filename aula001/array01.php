<?php
#Exercicio 01:
#1. Crie um array chamado cidades contendo o nome de 5 cidades que vc quer visitar
#2. Imprima na tela o valor da  terceira cidade deste array.

$cidade = [
    "sao paulo",
    "santa catarina",
    "fortaleza",
    "piaui",
    "rio grande do sul"
];

echo "Eu quero visitar $cidade[2] . \n";

#Exercicio 02
#1. Crie um array associativo chamado $alunos onde as chaves sao os nomes de tres
# alunos e os valores sao as idades deles.
#2. imprima a idade do segundo aluno.

$alunos = [
    "fernando" => 36,
    "Mikael" => 9,
    "Dudi" => 58,
];

echo "A idade do aluno Mikael e: " . $alunos["Mikael"] . " anos " . "\n";

