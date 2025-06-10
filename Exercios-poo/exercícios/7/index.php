<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Planejamento de Viagem</title>
</head>

<body>
    <h1>Planejamento de Viagem</h1>
    <form method="post">
        <label>Origem: <input type="text" name="origem" required></label><br>
        <label>Destino: <input type="text" name="destino" required></label><br>
        <label>Distância (km): <input type="number" name="distancia" step="0.01" required></label><br>
        <label>Tempo estimado (horas): <input type="number" name="tempo" step="0.01" required></label><br>
        <label>Consumo do veículo (km/l): <input type="number" name="consumo" step="0.01" required></label><br>
        <label>Preço do combustível (R$): <input type="number" name="preco_combustivel" step="0.01"
                required></label><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'classe.php';
        $viagem = new Viagem(
            $_POST['origem'],
            $_POST['destino'],
            $_POST['distancia'],
            $_POST['tempo'],
            $_POST['consumo'],
            $_POST['preco_combustivel']
        );
        $detalhes = $viagem->detalhesViagem();
        echo "<h2>Resumo:</h2>";
        echo "Origem: {$detalhes['origem']}<br>";
        echo "Destino: {$detalhes['destino']}<br>";
        echo "Velocidade média: " . number_format($detalhes['velocidade_media'], 2, ',', '.') . " km/h<br>";
        echo "Consumo estimado: " . number_format($detalhes['consumo_estimado'], 2, ',', '.') . " litros<br>";
        echo "Custo da viagem: R$ " . number_format($detalhes['custo_viagem'], 2, ',', '.') . "<br>";
    }
    ?>
</body>

</html>