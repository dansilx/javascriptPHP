<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ex005</title>
</head>
<body>
    <h1>Digite 10 números inteiros:</h1>
    <form action="ex005resposta.php" method="post">
        <?php 
            for ($i=0;$i < 10;$i++) {
                echo '<label>Digite o número aqui:</label><br>
                <input type="number" name="numeros[]"><br>';
            }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>