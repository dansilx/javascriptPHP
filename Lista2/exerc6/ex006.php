<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ex006</title>
</head>
<body>
    <h1>Cadastro de produto: </h1>
    <form action="ex006resposta.php" method="post">
        <?php 
            for ($i=1;$i <= 5;$i++) {
                echo '<label>Digite o nome do produto ' .$i.': </label>
                    <input type="name" name="nome[]"><br>
                    <label>Digite o preço do produto ' .$i.':</label>
                    <input type="number" step="0.01" name="preco[]"><br><br>';
            }
        ?>
    <button type="submit">Enviar</button>
    </form>    

</body>
</html>