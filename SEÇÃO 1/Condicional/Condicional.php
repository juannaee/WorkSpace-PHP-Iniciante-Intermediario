<?php

$numeroLimite = 100;
$numeroEntrada = 35;


if ($numeroEntrada > $numeroLimite)
{
    echo "Numero $numeroEntrada maior que $numeroLimite, Passou";

}
else if ($numeroEntrada == $numeroLimite)
{
    echo "Numero $numeroEntrada = $numeroLimite, Passou";

}
else
{
    echo "Não passou";
}
