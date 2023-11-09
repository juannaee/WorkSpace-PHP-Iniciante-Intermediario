<?php

function sacar(array $conta, float $valorSaque): array
{
    if ($valorSaque == $conta["Saldo"])
    {
        $conta["Saldo"] == 0;
    }
    else if ($valorSaque > $conta['Saldo'])
    {
        exibiMsg("Saque indisponivel");
        return $conta;
    }
    $conta["Saldo"] -= $valorSaque;
    return $conta;
}

function depositar(array $conta, float $valorDeposito): array
{
    $valorLimite = 1_000_000;
    if ($valorDeposito > $valorLimite)
    {
        exibiMsg("ERRO: valor de deposito acima do limite!");
        return $conta;
    }
    else if ($valorDeposito < 0)
    {
        exibiMsg("ERRO: valor de deposito abaixo de 0");
        return $conta;
    }
    $conta["Saldo"]
    += $valorDeposito;
    return $conta;
}
function exibiMsg($msg)
{
    echo $msg . PHP_EOL;
}
function exibiValor($valor)
{
    return isset($valor) && !empty($valor) ? $valor : "N/D";
}