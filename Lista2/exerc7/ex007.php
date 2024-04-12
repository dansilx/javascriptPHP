<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EX 007</title>
</head>
<body>
    <form action="ex007resposta.php" method="post">
        <?php for ($i=0;$i < 2;$i++):?>
            <label for="nome<?= $i ?>">Nome do Aluno <?= $i ?>:</label>
            <input type="text" name="nome<?= $i ?>" required>
            <label for="nota1<?= $i ?>">Nota 1 do Aluno <?= $i ?>:</label>
            <input type="text" name="nome<?= $i ?>" step="0.1" min="0" max="10" required>
            <label for="nota1<?= $i ?>">Nota 1 do Aluno <?= $i ?>:</label>
            <input type="text" name="nome<?= $i ?>" step="0.1" min="0" max="10" required>
        <?php endfor; ?>
        <button type="submit">Enviar!</button>
    </form>
</body>
</html>