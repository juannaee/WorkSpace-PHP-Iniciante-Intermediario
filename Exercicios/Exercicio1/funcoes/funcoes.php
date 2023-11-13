<?php

function sacar(array $conta, float $valorSaque): array
{
    if ($valorSaque == $conta["Saldo"])
    {
        $conta["Saldo"] == 0;
    }
    else if ($valorSaque > $conta['Saldo'])
    {
        exibiMsg("ERRO: Saque indisponivel");
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
    echo $msg . PHP_EOL . "<br>";
}
function exibiValor($valor)
{
    return isset($valor) && !empty($valor) ? $valor : "N/D";
}

function formatadorString(array &$conta): void
{
    $conta["Nome"] = mb_strtoupper($conta["Nome"]);

}

function exiberConta($conta): void
{
    ["Nome" => $nome, "Documento" => $documento, "Saldo" => $saldo] = $conta;

    echo "
        <li>Titular: " . exibiValor($nome) . "<br>
            Documento: " . exibiValor($documento) . " <br>
            Saldo: " . exibiValor($saldo) . " <br>
                                    
        </li>
        <br>
        ";

}





