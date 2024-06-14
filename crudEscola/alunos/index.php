<?php

    require_once("header2.php");

?>

    <h3 class="text-white my-3">Registro de Alunos</h3>
    <a href="inserir_aluno.php" class="btn btn-outline-light mt-3">Adicionar Alunos</a>

    <table class=" text text-white mt-3 table table-hover table-striped table-success">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Série</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornarAlunos();
                while($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= $l['id_matricula']?></td>
                <td><?= $l['nome']?></td>
                <td><?= $l['idade']?></td>
                <td><?= $l['serie']?></td>
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

    require_once("footer2.php");