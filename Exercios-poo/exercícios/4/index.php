<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Carro - Autonomia e Revisão</title>
</head>

<body>
    <h1>Dados do Carro</h1>
    <form method="post">
        <label>Modelo: <input type="text" name="modelo" required></label><br>
        <label>Combustível:
            <select name="combustivel" required>
                <option value="etanol">Etanol</option>
                <option value="gasolina">Gasolina</option>
            </select>
        </label><br>
        <label>Tanque cheio (litros): <input type="number" name="tanque" step="0.01" required></label><br>
        <label>Consumo (km/l): <input type="number" name="consumo" step="0.01" required></label><br>
        <label>Km rodados: <input type="number" name="km_rodados" step="0.01" required></label><br>
        <label>Preço do combustível (R$): <input type="number" name="preco_combustivel" step="0.01"
                required></label><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'classe.php';
        $carro = new Carro(
            $_POST['modelo'],
            $_POST['combustivel'],
            $_POST['tanque'],
            $_POST['consumo'],
            $_POST['km_rodados'],
            $_POST['preco_combustivel']
        );
        $detalhes = $carro->detalhesCarro();
        echo "<h2>Resultados:</h2>";
        echo "Modelo: {$detalhes['modelo']}<br>";
        echo "Combustível: {$detalhes['combustivel']}<br>";
        echo "Autonomia: " . number_format($detalhes['autonomia'], 2, ',', '.') . " km<br>";
        echo "Custo por km: R$ " . number_format($detalhes['custo_km'], 2, ',', '.') . "<br>";
        echo "Precisa de revisão? {$detalhes['revisao']}<br>";
    }
    ?>
</body>

</html>