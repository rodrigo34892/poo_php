<?php
// filepath: c:\xampp\htdocs\poo_php\Exercios-poo\exercícios\6\index.php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Moeda</title>
</head>
<body>
    <h1>Conversor Real x Dólar/Euro</h1>
    <form method="post">
        <label>Valor em reais: <input type="number" name="valor" step="0.01" required></label><br>
        <label>Moeda destino:
            <select name="moeda_destino">
                <option value="USD">Dólar (USD)</option>
                <option value="EUR">Euro (EUR)</option>
            </select>
        </label><br>
        <label>Cotação atual: <input type="number" name="cotacao" step="0.0001" required></label><br>
        <input type="submit" value="Converter">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'classe.php';
        $conversor = new ConversorMoeda($_POST['valor'], $_POST['moeda_destino'], $_POST['cotacao']);
        $detalhes = $conversor->detalhesConversao();
        echo "<h2>Resultado:</h2>";
        echo "Valor em reais: R$ " . number_format($detalhes['valor_reais'], 2, ',', '.') . "<br>";
        echo "Moeda destino: {$detalhes['moeda_destino']}<br>";
        echo "Cotação: " . number_format($detalhes['cotacao'], 4, ',', '.') . "<br>";
        echo "Valor convertido: " . number_format($detalhes['valor_convertido'], 2, ',', '.') . " {$detalhes['moeda_destino']}<br>";
    }
    ?>
</body>
</html>