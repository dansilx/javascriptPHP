<?php
    require_once("../header.php");
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else {
        $id = $_SESSION['id'];
        $dados = consultarProdutoId($id);
    }
    $_SESSION['id'] = $id;

    if ($_POST) {
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];
        $categoria = $_POST['categoria'];
        if ($nome != "" && $descricao != "" && $valor != "" && $categoria != "") {
            session_start();
            if(excluirProduto($nome, $descricao, $valor, $categoria, $_SESSION['id'])){
                echo '<p class="text-white">Registro excluído com sucesso!</p>';
            } else {
                echo '<p class="text-white">Erro ao excluir o registro!</p>';
            }
        } else {
            echo '<p class="text-white">Preencha todos os campos!</p>';
        }
    }
    
    $dados = consultarProdutoId($id);
?>

    <h3 class="text-white">Excluir Produto</h3>
    <form action="" method="POST" class="bg-dark text-white">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o nome: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="nome" value="<?=$dados['nome']?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe a descrição: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="descricao" value="<?=$dados['descricao']?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o valor: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="valor" value="<?=$dados['valor']?>" disabled>
            </div>
        </div>
        <div class="rol">
            <div class="col">
                <label for="categoria" class="form-label m-2 ">Selecione a categoria: </label>
                <select name="categoria" id="" class="form-select m-2 bg-secondary text-white" disabled>
                    <?php 
                        $linhas = retornarCategorias();
                        while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                            if ($l['id'] == $dados['categoria_id']) {
                            echo "<option selected value='{$l['id']}'>{$l['descricao']}</option>";
                            } else {
                                echo "<option value='{$l['id']}'>{$l['descricao']}</option>";
                            }
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-outline-danger m-2">Excluir</button>
            </div>
        </div>
    </form>

<?php
     
    require_once("../footer.php");