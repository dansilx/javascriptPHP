<?php
    require_once("header2.php");
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else {
        $id = $_SESSION['id'];
        $dados = consultarProfId($id);
    }
    $_SESSION['id'] = $id;

    if ($_POST) {
        $nome = $_POST['nome'];
        $disciplina = $_POST['disciplina'];
        $formacao = $_POST['formacao'];
        if ($nome != "" && $disciplina != "" && $formacao != "" && $_SESSION['id'] != "") {
            session_start();
            if(alterarProf($nome, $disciplina, $formacao, $_SESSION['id'])){
                echo '<p class="text-white">Registro alterado com sucesso!</p>';
            } else {
                echo '<p class="text-white">Erro ao alterar o registro!</p>';
            }
        } else {
            echo '<p class="text-white">Preencha todos os campos!</p>';
        }
    }
    
    $dados = consultarProfId($id);
?>

    <h3 class="text-white">Alterar Professor</h3>
    <form action=""  method="POST" class="bg-success text-white">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Nº de Registro: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="id" value="<?=$_SESSION['id']?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Alterar o nome: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="nome" value="<?=$dados['nome']?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Alterar a disciplina: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="disciplina" value="<?=$dados['disciplina']?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Alterar a formação: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="formacao" value="<?=$dados['formacao']?>">
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
