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
                <td><?= $l['nome']?></td>
                <td><?= $l['descricao']?></td>
                <td><?= $l['valor']?></td>
                <td><?= $l['categoria']?></td>
                <td class="d-flex justify-content-end">
                    <a href="alterar_produto.php?id=<?=$l['id']?>" class="btn btn-outline-warning m-2">
                        Alterar
                    </a>
                    <a href="excluir_produto.php?id=<?=$l['id']?>" class="btn btn-outline-danger m-2">
                        Excluir
                    </a>
                </td>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

<?php

    require_once("../footer.php");