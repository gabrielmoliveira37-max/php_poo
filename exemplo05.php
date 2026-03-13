<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $previdencia;
    public $descontos;
    public $tipoFuncionario;

    function __construct($nome, $salario, $previdencia)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->previdencia = $previdencia;
        $this->descontos = $this->calcularDescontos();
        $this->tipoFuncionario = $this->categorizarFuncionario();
    }

    function calcularDescontos()
    {
        return number_format($this-> salario*0.275 + $this ->previdencia, 2, ',','.');
    }

    function categorizarFuncionario():string
    {
        $salario = $this->salario;

        if($salario >= 1000 && $salario < 2000) {
            $tipoFuncionario = "Júnior";
        } else if ($salario >= 2000 && $salario < 3000) {
            $tipoFuncionario = "Pleno";
        } else if ($salario >= 3000) {
            $tipoFuncionario = "Sênior";
        } else {
            $tipoFuncionario = "Estagiário";
        }

        return $tipoFuncionario;
    }
}

$joao = new Funcionario('João Filho', 1000, 100);
$maria = new Funcionario('Maria Rute', 2000, 200);
$jose = new Funcionario('José Salgado', 3000, 300);

echo "Funcionári@ $joao->nome é $joao->tipoFuncionario e o valor do desconto é de R$ $joao->descontos.<br>";
echo "Funcionári@ $maria->nome é $maria->tipoFuncionario e o valor do desconto é de R$ $maria->descontos.<br>";
echo "Funcionári@ $jose->nome é $jose->tipoFuncionario e o valor do desconto é de R$ $jose->descontos.<br>";
