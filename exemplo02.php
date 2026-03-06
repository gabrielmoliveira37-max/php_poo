<?php

function calcularDescontos($salario, $previdencia) {
    return number_format($salario*0.275 + $previdencia, 2, ',', '.');
}

$joaoNome = "João Filho";
$joaoDescontos = calcularDescontos(1000, 100);

$mariaNome = "Maria Rute";
$mariaDescontos = calcularDescontos(2000, 200);

$joseNome = "José Salgado";
$joseDescontos = calcularDescontos(3000, 300);

echo "O valor do desconto de $joaoNome é R$ $joaoDescontos. <br>";
echo "O valor do desconto de $mariaNome é R$ $mariaDescontos. <br>";
echo "O valor do desconto de $joseNome é R$ $joseDescontos. <br>";