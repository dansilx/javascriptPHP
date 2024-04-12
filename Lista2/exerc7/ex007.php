<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EX 007</title>
</head>
<body>
    <h2>Digite o nome dos alunos e suas notas: </h2>
    <form action="ex007resposta.php" method="post">
        <?php for ($i=1;$i <= 2;$i++):?>
            <label for="nome<?= $i ?>">Nome do Aluno <?= $i ?>: </label>
            <input type="text" name="nome[]<?= $i ?>" required><br>
            <label for="nota1<?= $i ?>">Nota 1 do Aluno <?= $i ?>:</label>
            <input type="number" name="nota1[]<?= $i ?>" step="0.1" min="0" max="10" required><br>
            <label for="nota1<?= $i ?>">Nota 1 do Aluno <?= $i ?>:</label>
            <input type="number" name="nota2[]<?= $i ?>" step="0.1" min="0" max="10" required><br>
        <?php endfor; ?>
        <button type="submit">Enviar!</button>
    </form>
</body>
</html>