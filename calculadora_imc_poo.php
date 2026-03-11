<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC - POO</title>
</head>
<body>
    <h1>Calculadora de IMC - POO</h1>
    <form method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" step="0.01" name="peso" id="peso" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" name="altura" id="altura" required><br><br>

        <input type="submit" value="Calcular IMC">

    <?php
    class IMCCalculator {
        private $peso;
        private $altura;

        public function __construct($peso, $altura) {
            $this->peso = $peso;
            $this->altura = $altura;
        }

        public function calcularIMC() {
            if ($this->altura <= 0) {
                return "Altura deve ser maior que zero.";
            }
            $imc = $this->peso / ($this->altura * $this->altura);
            return round($imc, 2);
        }

        public function classificacaoIMC($imc) {
            if ($imc < 18.5) {
                return "Categoria: Abaixo do peso";
            } elseif ($imc < 25) {
                return "Categoria: Peso normal";
            } elseif ($imc < 30) {
                return "Categoria: Sobrepeso";
            } else {
                return "Categoria: Obesidade";
            }
        }
    }
    if ($_POST) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imcCalculator = new IMCCalculator($peso, $altura);
        $imc = $imcCalculator->calcularIMC();
        $classificacao = $imcCalculator->classificacaoIMC($imc);

        echo "<h2>Resultado</h2>";
        echo "<p>Seu IMC é: " . $imc . "</p>";
        echo "<p>" . $classificacao . "</p>";
    }
    ?>
    </form>
</body>
</html>