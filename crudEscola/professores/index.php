<?php

    require_once("header2.php");

?>

    <h3 class="text-white my-3">Registro de Professores</h3>
    <a href="inserir_professor.php" class="btn btn-outline-light mt-3">Adicionar Professor</a>

    <table class="mt-3 table table-hover table-striped text-white table-success">
        <thead>
            <tr>
                <th>Nº Registro</th>
                <th>Nome</th>
                <th>Disciplina</th>
                <th>Formação</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornarProfessores();
                while($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= $l['id']?></td>
                <td><?= $l['nome']?></td>
                <td><?= $l['disciplina']?></td>
                <td><?= $l['formacao']?></td>
                <td class="d-flex justify-content-end">
                    <a href="alterar_professor.php" class="btn btn-outline-success m-2">
                        Alterar
                    </a>
                    <a href="excluir_professor.php" class="btn btn-outline-success m-2">
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