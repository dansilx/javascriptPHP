<?php

    require_once("../header.php");

?>

    <h3 class="text-white my-3">Gerencimento de Produtos</h3>
    <a href="inserir_produto.php" class="btn btn-outline-light mt-3">Adicionar Produto</a>

    <table class="mt-3 table table-hover table-striped text-white table-dark">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornarProdutos();
                while($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td>Persuasão</td>
                <td>Livro de Jane Auesten</td>
                <td>R$ 10,00</td>
                <td>Livros</td>
                <td>
                    <a href="alterar_produto.php" class="btn btn-outline-warning">
                        Alterar
                    </a>
                    <a href="excluir_produto.php" class="btn btn-outline-danger">
                        Excluir
                    </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

<?php

    require_once("../footer.php");