<?php

$path = 'funcoes/';
$file = $path . 'funcoes.php';
include $file;

// link: http://localhost:8080/Exercicios/Exercicio1/main.php


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

$listaFuncionario["Funcionario_4"] = [
    "Nome" => "Jonas",
    "Documento" => "10499769812300",
    "Saldo" => 9854.562,

];

$listaFuncionario["Funcionario_3"] =
sacar(conta: $listaFuncionario["Funcionario_3"], valorSaque: 650);
$listaFuncionario["Funcionario_2"] =
depositar(conta: $listaFuncionario["Funcionario_2"], valorDeposito: 580000000);
formatadorString($listaFuncionario["Funcionario_2"]);

unset($listaFuncionario["Funcionario_1"]);


// foreach ($listaFuncionario as $i => $funcionario)
// {
//     ["Nome" => $nome, "Documento" => $documento, "Saldo" => $saldo] = $funcionario;

//     exibiMsg($i . ": ");
//     exibiMsg("Nome: " . exibiValor($nome));
//     exibiMsg("Documento: " . exibiValor($funcionario["Documento"]));
//     exibiMsg("Saldo: " . exibiValor($funcionario["Saldo"]));
//     exibiMsg(" ");

// }


// echo "<ul>";

// foreach ($listaFuncionario as $i => $funcionario)
// {
//     exiberConta($funcionario);
// }

// echo "</ul>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contas</h1>
    <dl>
        <?php foreach ($listaFuncionario as $i => $funcionario)
        {
            ["Nome" => $nome, "Saldo" => $saldo, "Documento" => $documento] = $funcionario;
            ?>

            <dt>
                <h4>
                    <?= $i . ": " ?> <br>
                </h4>
            </dt>
            <dd>
                <?= "Nome: " . exibiValor($nome) . " - " . "Documento: " . exibiValor($documento) ?>
                <br>
                <?= "Saldo: " . exibiValor($saldo) ?>
            </dd>


        <?php } ?>
    </dl>



</body>

</html>