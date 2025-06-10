<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produto - Controle de Estoque</title>
</head>

<body>
    <h1>Controle de Estoque</h1>
    <form method="post">
        <label>Nome do produto: <input type="text" name="nome" required></label><br>
        <label>Quantidade em estoque: <input type="number" name="quantidade" required></label><br>
        <label>Valor unitário (R$): <input type="number" name="valor_unitario" step="0.01" required></label><br>
        <label>Movimentação:
            <select name="movimentacao">
                <option value="entrada">Entrada</option>
                <option value="saida">Saída</option>
            </select>
        </label>
        <label>Quantidade movimentada: <input type="number" name="qtd_mov" required></label><br>
        <input type="submit" value="Atualizar Estoque">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'classe.php';
        $produto = new Produto($_POST['nome'], $_POST['quantidade'], $_POST['valor_unitario']);
        if ($_POST['movimentacao'] == 'entrada') {
            $produto->entradaEstoque($_POST['qtd_mov']);
        } else {
            $produto->saidaEstoque($_POST['qtd_mov']);
        }
        $detalhes = $produto->detalhesProduto();
        echo "<h2>Estoque Atual:</h2>";
        echo "Produto: {$detalhes['nome']}<br>";
        echo "Quantidade: {$detalhes['quantidade']}<br>";
        echo "Valor unitário: R$ " . number_format($detalhes['valor_unitario'], 2, ',', '.') . "<br>";
        echo "Valor total em estoque: R$ " . number_format($detalhes['valor_total'], 2, ',', '.') . "<br>";
    }
    ?>
</body>

</html>