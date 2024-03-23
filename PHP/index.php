<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    Hoje é dia <?php echo date("d/m/Y"); ?> 
    <form action="resposta.php" method="post">
        <label>Informe o valor 1:</label><br>
        <input type="text" name="valor1"><br>
        <label>Informe o valor 2:</label><br>
        <input type="text" name="valor2"><br>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>
