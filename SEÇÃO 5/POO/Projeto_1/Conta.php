<?php
class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public string $telefoneTitular;
    public float $saldoTitular;


    public function sacar($valor)
    {
        if ($valor > $this->saldoTitular)
        {
            echo "Saldo para saque insuficiente!" . PHP_EOL;
        }
        else if ($valor == $this->saldoTitular)
        {
            $this->saldoTitular = 0;

        }
        else
        {
            $this->saldoTitular -= $valor;

        }


    }

    public function transferir(float $valor, Conta $contaDestino): void
    {
        if ($valor > $this->saldoTitular)
        {
            echo "Valor de transição insuficiente!" . PHP_EOL;

        }

        $this->saldoTitular -= $valor;
        $contaDestino->saldoTitular += $valor;


    }


}

?>