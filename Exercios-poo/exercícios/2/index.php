<?php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas do Aluno</title>
</head>
<body>
    <h1>Formulário de Notas do Aluno</h1>
    <form action="" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="subject">Disciplina:</label>
        <input type="text" id="subject" name="subject" required><br>

        <label for="grade1">Nota 1:</label>
        <input type="number" id="grade1" name="grade1" step="0.01" required><br>

        <label for="grade2">Nota 2:</label>
        <input type="number" id="grade2" name="grade2" step="0.01" required><br>

        <label for="grade3">Nota 3:</label>
        <input type="number" id="grade3" name="grade3" step="0.01" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'Exercise2.php';

        $nome = $_POST['name'];
        $disciplina = $_POST['subject'];
        $notas = [$_POST['grade1'], $_POST['grade2'], $_POST['grade3']];

        $aluno = new Aluno($nome, $disciplina, $notas);
        $detalhes = $aluno->detalhesAluno();

        echo "<h2>Resultado:</h2>";
        echo "Nome: " . htmlspecialchars($detalhes['nome']) . "<br>";
        echo "Disciplina: " . htmlspecialchars($detalhes['disciplina']) . "<br>";
        echo "Notas: " . implode(', ', $detalhes['notas']) . "<br>";
        echo "Média: " . number_format($detalhes['media'], 2, ',', '.') . "<br>";
        echo "Status: " . $detalhes['status'] . "<br>";
    }
    ?>
</body>
</html>