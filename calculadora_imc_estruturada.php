<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC - Estruturada</title>
</head>
<body>
    <h1>Calculadora de IMC - Estruturada</h1>
    <form method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" step="0.01" name="peso" id="peso" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" name="altura" id="altura" required><br><br>

        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_POST) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = calcularIMC($peso, $altura);

        echo "<h2>Resultado</h2>";
        echo "<p>Seu IMC é: " . $imc . "</p>";
    }

    function calcularIMC($peso, $altura) {
        if ($altura <= 0) {
            return "Altura deve ser maior que zero.";
        }
        $imc = $peso / ($altura * $altura);
        return round($imc, 2);
    }
    classificacaoIMC($imc);
    function classificacaoIMC($imc) {
        if ($imc < 18.5) {
            echo "<p>Categoria: Abaixo do peso</p>";
        } elseif ($imc < 25) {
            echo "<p>Categoria: Peso normal</p>";
        } elseif ($imc < 30) {
            echo "<p>Categoria: Sobrepeso</p>";
        } else {
            echo "<p>Categoria: Obesidade</p>";
        }
    }
    ?>
</body>
</html>