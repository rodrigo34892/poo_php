<?php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Funcionário</title>
</head>
<body>
    <h1>Dados do Funcionário</h1>
    <form action="" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="position">Cargo:</label>
        <input type="text" id="position" name="position" required><br><br>

        <label for="salary">Salário:</label>
        <input type="number" id="salary" name="salary" step="0.01" required><br><br>

        <label for="weekly_hours">Carga Horária Semanal:</label>
        <input type="number" id="weekly_hours" name="weekly_hours" required><br><br>

        <label for="bonus">Bônus:</label>
        <input type="number" id="bonus" name="bonus" step="0.01" required><br><br>

        <label for="extra_hours">Horas Extras:</label>
        <input type="number" id="extra_hours" name="extra_hours" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'Exercise1.php';

        $nome = $_POST['name'];
        $cargo = $_POST['position'];
        $salario = $_POST['salary'];
        $cargaHoraria = $_POST['weekly_hours'];
        $bonus = $_POST['bonus'];
        $horasExtras = $_POST['extra_hours'];

        $funcionario = new Funcionario($nome, $cargo, $salario, $cargaHoraria);

        echo "<h2>Detalhes do Funcionário:</h2>";
        echo "<ul>";
        echo "<li>Nome: {$nome}</li>";
        echo "<li>Cargo: {$cargo}</li>";
        echo "<li>Salário base: R$ " . number_format($salario, 2, ',', '.') . "</li>";
        echo "<li>Valor da hora: R$ " . number_format($funcionario->calcularValorHora(), 2, ',', '.') . "</li>";
        echo "<li>Hora extra ({$horasExtras}h): R$ " . number_format($funcionario->calcularHoraExtra($horasExtras), 2, ',', '.') . "</li>";
        echo "<li>Bônus: R$ " . number_format($bonus, 2, ',', '.') . "</li>";
        $salarioFinal = $salario + $funcionario->calcularHoraExtra($horasExtras) + $bonus;
        echo "<li><strong>Salário final: R$ " . number_format($salarioFinal, 2, ',', '.') . "</strong></li>";
        echo "</ul>";
    }
    ?>
</body>
</html>