<?php

    require_once("../header.php");

?>

    <h3 class="text-white my-3">Registro de Alunos</h3>
    <a href="inserir_aluno.php" class="btn btn-outline-success mt-3">Adicionar Alunos</a>

    <table class="mt-3 table table-hover table-striped text-white table-dark">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Série</th>
                <th>ID</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornarAlunos();
                while($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= $l['nome']?></td>
                <td><?= $l['idade']?></td>
                <td><?= $l['serie']?></td>
                <td><?= $l['aluno_id']?></td>
                <td class="d-flex justify-content-end">
                    <a href="alterar_aluno.php?id=<?=$l['id']?>" class="btn btn-outline-success">
                        Alterar
                    </a>
                    <a href="excluir_aluno.php?id=<?=$l['id']?>" class="btn btn-outline-success">
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