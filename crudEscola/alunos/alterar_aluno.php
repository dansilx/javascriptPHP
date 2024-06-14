<?php
    require_once("header2.php");
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else {
        $id = $_SESSION['id'];
        $dados = consultarAlunoId($id);
    }
    $_SESSION['id'] = $id;

    if ($_POST) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $serie = $_POST['serie'];
        $turma = $_POST['id_matricula'];
        if ($nome != "" && $idade != "" && $serie != "" && $turma != "") {
            session_start();
            if(alterarAluno($nome, $idade, $serie, $turma, $_SESSION['id'])){
                echo '<p class="text-white">Registro alterado com sucesso!</p>';
            } else {
                echo '<p class="text-white">Erro ao alterar o registro!</p>';
            }
        } else {
            echo '<p class="text-white">Preencha todos os campos!</p>';
        }
    }
    
    $dados = consultarAlunoId($id);
?>

    <h3 class="text-white">Alterar Aluno</h3>
    <form action=""  method="POST" class="bg-success text-white">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Alterar o nome: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="nome" value="<?=$dados['nome']?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Alterar a idade: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="idade" value="<?=$dados['idade']?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Alterar a séria: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="valor">
            </div>
        </div>
        <!-- <div class="rol">
            <div class="col">
                <label for="turma" class="form-label m-2 ">Selecione a turma: </label>
                <select name="turma" class="form-select m-2 bg-light text-success" required>
                    <?php 
                        // $linhas = retornarTurmas();
                        // while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        //     echo "<option value='{$l['id']}'>{$l['nome']}</option>";
                        // }
                    ?>
                </select>
            </div>
        </div> -->
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-outline-success m-2">Salvar</button>
            </div>
        </div>
    </form>

<?php

    require_once("footer2.php");
