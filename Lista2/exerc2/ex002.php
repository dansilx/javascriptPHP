<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EX002</title>
</head>
<body>
    <h2></h2>
    <form action="ex002resposta.php" method="post">
        <?php 
            for ($i=0;$i<10;$i++) {
                echo '<label>Digite um número</label><br>
                    <input type="number" name="numeros[]"><br>';
            }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>