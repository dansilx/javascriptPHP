<?php
    require_once("header2.php");
?>

    <h3 class="text-white">Inserir Turma</h3>
    <form class="bg-success text-white" action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Digite o nome: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="nome" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Digite o ano: </label>
                <input type="number" class="form-control m-2 bg-light text-success" name="ano" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Digite o Nº de Registro: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="professor_id" required>
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
                <button type="submit" class="btn btn-outline-light m-2">Salvar</button>
            </div>
        </div>
    </form>

<?php
    if ($_POST) {
        $nome = $_POST['nome'];
        $ano = $_POST['ano'];
        $professor_id = $_POST['professor_id'];
        
        if ($nome != "" && $ano != "" && $professor_id != "") {
            if(inserirTurma($nome, $ano, $professor_id)){
                echo '<p class="text-white">Registro inserido com sucesso!</p>';
            } else {
                echo '<p class="text-white">Erro ao inserir o registro!</p>';
            }
        } else {
            echo '<p class="text-white">Preencha todos os campos!</p>';
        }
    }
    require_once("footer2.php");