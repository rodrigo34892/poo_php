<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Pedido de Produto</title>
</head>

<body>
    <h1>Formulário de Pedido de Produto</h1>
    <form action="" method="post">
        <label for="productName">Nome do Produto:</label>
        <input type="text" id="productName" name="productName" required><br><br>

        <label for="quantity">Quantidade:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>

        <label for="unitPrice">Preço Unitário:</label>
        <input type="number" step="0.01" id="unitPrice" name="unitPrice" required><br><br>

        <label for="customerType">Tipo de Cliente:</label>
        <select id="customerType" name="customerType" required>
            <option value="regular">Normal</option>
            <option value="premium">Premium</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'classe.php';

        $nomeProduto = $_POST['productName'];
        $quantidade = (int) $_POST['quantity'];
        $precoUnitario = (float) $_POST['unitPrice'];
        $tipoCliente = $_POST['customerType'];

        $pedido = new Pedido($nomeProduto, $quantidade, $precoUnitario, $tipoCliente);
        $detalhes = $pedido->detalhesPedido();

        echo "<h2>Resumo do Pedido:</h2>";
        echo "Produto: " . htmlspecialchars($detalhes['nomeProduto']) . "<br>";
        echo "Quantidade: " . $detalhes['quantidade'] . "<br>";
        echo "Preço Unitário: R$ " . number_format($detalhes['precoUnitario'], 2, ',', '.') . "<br>";
        echo "Tipo de Cliente: " . ($detalhes['tipoCliente'] === 'premium' ? 'Premium' : 'Normal') . "<br>";
        echo "Total Bruto: R$ " . number_format($detalhes['totalBruto'], 2, ',', '.') . "<br>";
        echo "Desconto: R$ " . number_format($detalhes['desconto'], 2, ',', '.') . "<br>";
        echo "Imposto: R$ " . number_format($detalhes['imposto'], 2, ',', '.') . "<br>";
        echo "<strong>Total Final: R$ " . number_format($detalhes['totalFinal'], 2, ',', '.') . "</strong><br>";
    }
    ?>
</body>

</html>