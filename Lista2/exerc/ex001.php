<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ex001</title>
</head>
<body>
    <h1>Digite os dados dos alunos:</h1>
    <form action="ex001resposta.php" method="post">
        <?php 
            for ($i = 0; $i < 10; $i++) {
                echo '<label>Digite o nome do aluno: </label><br>
                    <input type="name" name="nome[]"><br>
                    <label>Digite a nota do aluno: </label><br>
                    <input type="number" name="nota[]"><br>';
            }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>