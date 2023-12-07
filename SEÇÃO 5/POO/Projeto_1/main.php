<?php


include("Conta.php");

$teste = new Conta(nomeTitular: "", cpfTitular: "10488775400");
// $teste2 = new Conta("Jonas", "189564256300");

// $teste->setNomeTitular("Juan Guilherme Silva Lemos");
// $teste->cpfTitular = "10488775400";
// $teste->telefoneTitular = "(81)996272911";
$teste->depositar(500);
$teste->depositar(99999999);
// $teste->sacar(2900);


// $teste2->cpfTitular = "1624888755500";
// $teste2->telefoneTitular = "(81)966271411";


// $teste->transferir(100, $teste2);



var_dump($teste);
// var_dump($teste2);






?>