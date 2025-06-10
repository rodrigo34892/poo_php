<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Reserva de Hotel</title>
</head>

<body>
    <h1>Simulação de Diária</h1>
    <form method="post">
        <label>Nome do hóspede: <input type="text" name="nome" required></label><br>
        <label>Número de noites: <input type="number" name="noites" required></label><br>
        <label>Tipo de quarto:
            <select name="tipo_quarto">
                <option value="simples">Simples</option>
                <option value="luxo">Luxo</option>
                <option value="suite">Suíte</option>
            </select>
        </label><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'classe.php';
        $reserva = new ReservaHotel($_POST['nome'], $_POST['noites'], $_POST['tipo_quarto']);
        $detalhes = $reserva->detalhesReserva();
        echo "<h2>{$detalhes['mensagem']}</h2>";
        echo "Tipo de quarto: {$detalhes['tipo_quarto']}<br>";
        echo "Preço por noite: R$ " . number_format($detalhes['preco_noite'], 2, ',', '.') . "<br>";
        echo "Total: R$ " . number_format($detalhes['total'], 2, ',', '.') . "<br>";
    }
    ?>
</body>

</html>