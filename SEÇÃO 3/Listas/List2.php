<?php


function sacar($conta, $valorSaque)
{
    if ($valorSaque == $conta["Saldo"])
    {
        $conta["Saldo"] == 0;
    }
    else if ($valorSaque > $conta['Saldo'])
    {
        echo "Saque indisponivel" . PHP_EOL;
        return $conta;
    }
    $conta["Saldo"] -= $valorSaque;
    return $conta;
}



function exibeMsg($msg)
{
    echo $msg . PHP_EOL;
}
function exibeValor($valor)
{
    return isset($valor) && !empty($valor) ? $valor : "N/D";
}

$listaFuncionario = [
    "Funcionario_1" => [
        "Nome" => "Juan",
        "Documento" => 10488775400,
        "Saldo" => 100,
    ],
    "Funcionario_2" => [
        "Nome" => "John",
        "Documento" => 10498745600,
        "Saldo" => 1985,

    ],


];

$listaFuncionario["Funcionario_3"] = [
    "Nome" => "Julia",
    "Documento" => null,
    "Saldo" => 198,
];


$listaFuncionario["Funcionario_3"] =
sacar(conta: $listaFuncionario["Funcionario_3"], valorSaque: 650);


foreach ($listaFuncionario as $i => $funcionario)
{

    exibeMsg($i . ": ");
    exibeMsg("Nome: " . exibeValor($funcionario["Nome"]));
    exibeMsg("Documento: " . exibeValor($funcionario["Documento"]));
    exibeMsg("Saldo: " . exibeValor($funcionario["Saldo"]));
    exibeMsg(" ");

}


