<?php

$conta1 = [
    "Titular" => "Juan",
    "Saldo" => 1956,
];

$conta2 = [
    "Titular" => "John",
    "Saldo" => 2000,
];


$listContas = [$conta1, $conta2];

foreach ($listContas as $indice => $conta)
{
    echo "Indice: $indice " . $conta["Titular"] . " Saldo: " . $conta["Saldo"] . PHP_EOL;



}