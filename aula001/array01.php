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

#exercicio 03
#1. crie um array chamado $cores contendo tres cores.
#2. adicione uma nova cor ao final do array
#3. remova a primeira cor do array.
#4. imprima o array resultante

$cores = ['azul', 'vermelho', 'branco']; //tres cores em um array
$cores[] = 'verde'; // essa sera adicionada no final do array

array_shift($cores); //essa funcao esta tirando o primeiro item do array

print_r ($cores); // e aqui esta imprimindo o array completo sem a cor azul no comeco
//e com a cor verde no final.

echo "As cores sao: " . implode(", ", $cores) . "\n";
//imprime de forma uma ao lado da outra.