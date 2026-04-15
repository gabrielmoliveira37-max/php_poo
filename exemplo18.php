<?php

class Conta
{
    // Atributos - Propriedades - Campos
    private $numero;
    private $saldo;

    // Método Construtor
    function __construct($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    // Métodos Getters e Setters
    public function getNumero()
    {
        return $this->numero;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    protected function setSaldo($novoSaldo)
    {
        $this->saldo = $novoSaldo;
    }

    // Métodos
    function creditar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    function debitar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }

    function transferir($outraConta, $valor)
    {
        if ($this->saldo >= $valor) {
            $this->debitar($valor);
            $outraConta->creditar($valor);
        }
    }
}

class Poupanca extends Conta
{
    protected $juros;

    function __construct($numero, $saldo, $juros)
    {
        parent::__construct($numero, $saldo);
        $this->juros = $juros;
    }

    function creditar($valor)
    {
        parent::creditar($valor);
        $this->atualizarJuros();
    }

    function atualizarJuros()
    {
        $novoSaldo = $this->getSaldo() * (1 + $this->juros);
        $this->setSaldo($novoSaldo);
    }

}

$conta = new Conta(1, 150);
$conta->creditar(50);
$conta->debitar(100);
echo "Saldo da conta {$conta->getNumero()}: {$conta->getSaldo()} <br>";

$poupanca = new Poupanca(2, 150, 0.10);
$poupanca->creditar(50);
$poupanca->debitar(100);
$poupanca->atualizarJuros();
echo "Saldo da Poupança {$poupanca->getNumero()}: {$poupanca->getSaldo()} <br>";