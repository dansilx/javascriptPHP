<?php
    require_once("../header.php");
?>

    <h3 class="text-white">Inserir Produto</h3>
    <form class="bg-dark text-white" action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o nome: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="nome" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe a descrição: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="descricao" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o valor: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="valor" required>
            </div>
        </div>
        <div class="rol">
            <div class="col">
                <label for="categoria" class="form-label m-2 ">Selecione a categoria: </label>
                <select name="categoria" id="" class="form-select m-2 bg-secondary text-white" required>
                    <?php 
                        $linhas = retornarCategorias();
                        while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                            echo "<option value='{$l['id']}'>{$l['descricao']}</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-outline-success m-2">Salvar</button>
            </div>
        </div>
    </form>

<?php
    if ($_POST) {
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];
        $categoria = $_POST['categoria'];
        if ($nome != "" && $descricao != "" && $valor != "" && $categoria != "") {
            if(inserirProduto($nome, $descricao, $valor, $categoria)){
                echo '<p class="text-white">Registro inserido com sucesso!</p>';
            } else {
                echo '<p class="text-white">Erro ao inserir o registro!</p>';
            }
        } else {
            echo '<p class="text-white">Preencha todos os campos!</p>';
        }
    }
    require_once("../footer.php");