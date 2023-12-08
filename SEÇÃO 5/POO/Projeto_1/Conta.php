<?php
class Conta
{
    public string $cpfTitular;
    private string $nomeTitular;
    public string $telefoneTitular;
    private float $saldoTitular = 0.0;
    private float $limteDeposito = 1_000_000;
    private static $valorMovido = 0.0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {

        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $this->validarNome($nomeTitular);

    }

    private function validarNome($nomeTitular): string
    {
        return strlen($nomeTitular) < 1 ? "N/D" : (strlen($nomeTitular) < 5 ? "Nome invalido" : $nomeTitular);
    }

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
        self::$valorMovido += $valor;
    }

    public function getNomeTitular()
    {
        return $this->nomeTitular;

    }

    public function setNomeTitular($valor): void
    {
        $this->nomeTitular = $valor;

    }

    public function depositar($valor): void
    {
        if ($valor > $this->limteDeposito)
        {
            echo "Deposito Indisponivel!" . PHP_EOL . "Valor acima de " . $this->limteDeposito . PHP_EOL;
            return;
        }
        $this->saldoTitular += $valor;
        self::$valorMovido += $valor;
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
        self::$valorMovido += $valor;

    }
    public static function getValorMovido()
    {
        return self::$valorMovido;

    }
}

?>