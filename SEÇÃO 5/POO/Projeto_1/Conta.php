<?php
class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public string $telefoneTitular;
    public float $saldoTitular;


    public function sacar(float $valor): void
    {
        if ($valor > $this->saldoTitular)
        {
            echo "Saldo para saque insuficiente!" . PHP_EOL;
            return;
        }
        else if ($valor == $this->saldoTitular)
        {
            $this->saldoTitular = 0;
            return;
        }

        $this->saldoTitular -= $valor;
    }

    public function transferir(float $valor, Conta $contaDestino): void
    {
        if ($valor > $this->saldoTitular)
        {
            echo "Valor de transição insuficiente!" . PHP_EOL;
            return;
        }
        $this->saldoTitular -= $valor;
        $contaDestino->saldoTitular += $valor;

    }
}

?>