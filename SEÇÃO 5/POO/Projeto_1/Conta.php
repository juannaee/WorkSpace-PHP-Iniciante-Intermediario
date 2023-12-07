<?php
class Conta {
    public string $cpfTitular;
    private string $nomeTitular;
    public string $telefoneTitular;
    private float $saldoTitular = 0.0;

<<<<<<< HEAD

    public function sacar(float $valor): void {
        if($valor > $this->saldoTitular) {
            echo "Saldo para saque insuficiente!".PHP_EOL;
=======
//teste
    public function sacar(float $valor): void
    {
        if ($valor > $this->saldoTitular)
        {
            echo "Saldo para saque insuficiente!" . PHP_EOL;
>>>>>>> 5bb1a725e10a46e863e0137b522f59d4589eebd3
            return;
        } else if($valor == $this->saldoTitular) {
            $this->saldoTitular = 0;
            return;
        }

        $this->saldoTitular -= $valor;
    }

    public function getNomeTitular() {
        return $this->nomeTitular;

    }

    public function setNomeTitular($valor): void {
        $this->nomeTitular = $valor;

    }

    public function depositar($valor): void {
        $this->saldoTitular += $valor;
    }

    public function transferir(float $valor, Conta $contaDestino): void {
        if($valor > $this->saldoTitular) {
            echo "Valor de transição insuficiente!".PHP_EOL;
            return;
        }
        $this->saldoTitular -= $valor;
        $contaDestino->saldoTitular += $valor;

    }
}

?>