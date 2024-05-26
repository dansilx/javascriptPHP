<?php
    require_once("../header.php");
?>

    <h3 class="text-white">Inserir Produto</h3>
    <form class="bg-success text-white" action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o nome: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="nome" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe a idade: </label>
                <input type="number" class="form-control m-2 bg-light text-success" name="idade" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe a série: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="serie" required>
            </div>
        </div>
        <div class="rol">
            <div class="col">
                <label for="categoria" class="form-label m-2 ">Selecione o professor: </label>
                <select name="professor" id="" class="form-select m-2 bg-light text-success" required>
                    <?php 
                        $linhas = retornarAluno();
                        while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                            echo "<option value='{$l['id']}'>{$l['descricao']}</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-outline-light m-2">Salvar</button>
            </div>
        </div>
    </form>

<?php
    if ($_POST) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $serie = $_POST['serie'];
        $professor = $_POST['professor'];
        if ($nome != "" && $idade != "" && $serie != "" && $professor != "") {
            if(inserirAluno($nome, $idade, $serie, $professor)){
                echo '<p class="text-white">Registro inserido com sucesso!</p>';
            } else {
                echo '<p class="text-white">Erro ao inserir o registro!</p>';
            }
        } else {
            echo '<p class="text-white">Preencha todos os campos!</p>';
        }
    }
    require_once("../footer.php");