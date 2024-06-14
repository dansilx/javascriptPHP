<?php

    require_once("header2.php");

?>

    <h3 class="text-white my-3">Registro de Turmas</h3>
    <a href="inserir_turma.php" class="btn btn-outline-light mt-3">Adicionar Turma</a>

    <table class=" text text-white mt-3 table table-hover table-striped table-success">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ano</th>
                <th>Nº Registro</th>
                <th>Professor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = mostrarTurma();
                while($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= $l['nome']?></td>
                <td><?= $l['ano']?></td>
                <td><?= $l['professor_id']?></td>
                <td><?= $l['nome_professor']?></td>
                <td class="d-flex justify-content-end">
                    <a href="alterar_turma.php?id=<?=$l['id']?>" class="btn btn-outline-success m-2">
                        Alterar
                    </a>
                    <a href="excluir_turma.php?id=<?=$l['id']?>" class="btn btn-outline-success m-2">
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