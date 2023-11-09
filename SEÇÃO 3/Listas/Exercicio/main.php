<?php

$path = 'funcoes/';
$file = $path . 'funcoes.php';
include $file;




$listaFuncionario = [
    "Funcionario_1" => [
        "Nome" => "Juan",
        "Documento" => 10488775400,
        "Saldo" => 100,
    ],
    "Funcionario_2" => [
        "Nome" => "John",
        "Documento" => 10498745600,
        "Saldo" => 1000,

    ],


];

$listaFuncionario["Funcionario_3"] = [
    "Nome" => "Julia",
    "Documento" => null,
    "Saldo" => 198,
];

$listaFuncionario["Funcionario_3"] =
sacar(conta: $listaFuncionario["Funcionario_3"], valorSaque: 650);
$listaFuncionario["Funcionario_2"] =
depositar(conta: $listaFuncionario["Funcionario_2"], valorDeposito: 500);


foreach ($listaFuncionario as $i => $funcionario)
{

    exibiMsg($i . ": ");
    exibiMsg("Nome: " . exibiValor($funcionario["Nome"]));
    exibiMsg("Documento: " . exibiValor($funcionario["Documento"]));
    exibiMsg("Saldo: " . exibiValor($funcionario["Saldo"]));
    exibiMsg(" ");

}
