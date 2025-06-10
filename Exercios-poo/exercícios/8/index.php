?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora Financeira</title>
</head>

<body>
    <h1>Parcelamento e Juros</h1>
    <form method="post">
        <label>Valor da compra (R$): <input type="number" name="valor" step="0.01" required></label><br>
        <label>Número de parcelas: <input type="number" name="parcelas" required></label><br>
        <label>Taxa de juros mensal (%): <input type="number" name="taxa_juros" step="0.01" required></label><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'classe.php';
        $taxa = $_POST['taxa_juros'] / 100;
        $calc = new CalculadoraFinanceira($_POST['valor'], $_POST['parcelas'], $taxa);
        $detalhes = $calc->detalhesFinanceiros();
        echo "<h2>Resultado:</h2>";
        echo "Valor da parcela: R$ " . number_format($detalhes['valor_parcela'], 2, ',', '.') . "<br>";
        echo "Total a pagar: R$ " . number_format($detalhes['total_pagar'], 2, ',', '.') . "<br>";
        echo "Juros pagos: R$ " . number_format($detalhes['juros_pagos'], 2, ',', '.') . "<br>";
    }
    ?>
</body>

</html>