<?php


include("Conta.php");

$teste = new Conta();
$teste2 = new Conta();

$teste->nomeTitular = "Juan Guilherme Silva Lemos";
$teste->cpfTitular = "10488775400";
$teste->telefoneTitular = "(81)996272911";
$teste->saldoTitular = 1000;


// $teste->sacar(2900);





$teste2->nomeTitular = "jonas";
$teste2->cpfTitular = "1624888755500";
$teste2->telefoneTitular = "(81)966271411";
$teste2->saldoTitular = 1000;


$teste->transferir(9000, $teste2);



var_dump($teste);
var_dump($teste2);






?>