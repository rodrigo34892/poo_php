<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>IMC e Classificação</title>
</head>

<body>
    <h1>Cálculo de IMC</h1>
    <form method="post">
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Peso (kg): <input type="number" name="peso" step="0.01" required></label><br>
        <label>Altura (m): <input type="number" name="altura" step="0.01" required></label><br>
        <input type="submit" value="Calcular IMC">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'classe.php';
        $pessoa = new Pessoa($_POST['nome'], $_POST['peso'], $_POST['altura']);
        $detalhes = $pessoa->detalhesPessoa();
        echo "<h2>Resultado:</h2>";
        echo "Nome: {$detalhes['nome']}<br>";
        echo "IMC: " . number_format($detalhes['imc'], 2, ',', '.') . "<br>";
        echo "Classificação: {$detalhes['classificacao']}<br>";
    }
    ?>
</body>

</html>