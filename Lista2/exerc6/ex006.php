<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ex006</title>
</head>
<body>
    <h1>Cadastro de produto: </h1>
    <form action="ex006resposta.php" method="post" 
        onsubmit="return beforeSubmit()">
        <input type="hidden" name="opcao" id="opcao" value="">

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

    <script>
        function beforeSubmit() {
            let resultado = parseInt(window.prompt(`Escolha uma das opções abaixo:
    1. Quantidade de produtos com preço inferior a R$50,00
    2. Quantidade de produtos com preço entre R$50,00 e R$100,00
    3. Quantidade de produtos com preço superior a R$100,00
    4. Nomes dos produtos com preço inferior a R$50,00
    5. Nomes dos produtos com preço entre R$50,00 e R$100,00
    6. Nomes dos produtos com preço superior a R$100,00
    7. Média dos preços dos produtos com preço inferior a R$50,00
    8. Média dos preços dos produtos com preço entre R$50,00 e R$100,00
    9. Média dos preços dos produtos com preço superior a R$100,00
            `, '1'))

            while (isNaN(resultado) || (resultado < 1 && resultado > 9)){
                resultado = parseInt(window.prompt(`Escolha uma das opções abaixo:
    1. Quantidade de produtos com preço inferior a R$50,00
    2. Quantidade de produtos com preço entre R$50,00 e R$100,00
    3. Quantidade de produtos com preço superior a R$100,00
    4. Nomes dos produtos com preço inferior a R$50,00
    5. Nomes dos produtos com preço entre R$50,00 e R$100,00
    6. Nomes dos produtos com preço superior a R$100,00
    7. Média dos preços dos produtos com preço inferior a R$50,00
    8. Média dos preços dos produtos com preço entre R$50,00 e R$100,00
    9. Média dos preços dos produtos com preço superior a R$100,00
            `, '1'))
            }

            document.getElementById("opcao").value = resultado;
            return resultado >= 1 && resultado <= 9;
        }
    </script>
</body>
</html>