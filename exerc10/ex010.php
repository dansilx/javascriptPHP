<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ex010</title>
</head>
<body>
    <h1>Calculadora de IMC: </h1>
    <form action="ex010resposta.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="peso">Peso(kg): </label>
        <input type="number" id="peso" name="peso" required><br><br>

        <label for="altura">Altura(m): </label>
        <input type="number" id="altura" name="altura" required><br><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>