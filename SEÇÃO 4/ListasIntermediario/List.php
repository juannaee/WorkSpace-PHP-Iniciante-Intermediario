<?php


$dados = [
    "Nome" => "Juan Guilherme Silva Lemos",
    "Telefone" => "(81) 996272911",
    "Idade" => "21",
];


list("Nome" => $nome, "Telefone" => $telefone, "Idade" => $idade) = $dados;
echo "-----------------------------------" . PHP_EOL;
["Nome" => $nome, "Telefone" => $telefone, "Idade" => $idade] = $dados;
var_dump($nome, $telefone, $idade);



$dados2 = [
    "nome_2" => "Juan Guilherme Silva Lemos",
    "telefone_2" => "(81) 996272911",
    "idade_2" => "21",
];

extract($dados2);
echo PHP_EOL;
var_dump($nome_2, $telefone_2, $idade_2);