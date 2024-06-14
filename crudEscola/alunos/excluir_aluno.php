<?php
    require_once("header2.php");
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    }
    
    if ($_POST) {
        if(excluirAluno($_SESSION['id'])){
            echo "<script>alert()</script>";
            header('Location: index.php');
        } else {
            echo '<p class="text-white">Erro ao excluir o registro!</p>';
        }
    }

    $dados = consultarAlunoId($id);
?>

    <h3 class="text-white">Excluir Aluno</h3>
    <form action="" method="POST" class="bg-success text-white">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Insira o nome: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="nome" value="<?=$dados['nome']?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Insira a idade: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="idade" value="<?=$dados['idade']?>"disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Insira a série: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="serie" value="<?=$dados['serie']?>"disabled>
            </div>
        </div>
        <!-- <div class="rol">
            <div class="col">
                <label for="professor" class="form-label m-2 ">Selecione o ID do Aluno: </label>
                <select name="professor" id="" class="form-select m-2 bg-light text-success" disabled>
                    <option value="1">Categoria 1</option>
                    <option value="2">Categoria 2</option>
                    <option value="3">Categoria 3</option>
                </select>
            </div>
        </div> -->
        <div class="row">
            <div class="col">
                <p class="text-danger ms-2 my-4">Deseja realmente excluir?!</p>
                <button type="submit" class="btn btn-outline-light m-2">Excluir</button>
            </div>
        </div>
    </form>

<?php

    require_once("footer2.php");