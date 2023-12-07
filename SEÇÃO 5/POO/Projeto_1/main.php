<?php


include("Conta.php");

$teste = new Conta();
$teste2 = new Conta();

$teste->setNomeTitular("Juan Guilherme Silva Lemos");
$teste->cpfTitular = "10488775400";
$teste->telefoneTitular = "(81)996272911";
$teste->depositar(500);
$teste->depositar(50);
$teste->sacar(2900);


$teste2->cpfTitular = "1624888755500";
$teste2->telefoneTitular = "(81)966271411";


$teste->transferir(9000, $teste2);



var_dump($teste);
var_dump($teste2);






?>