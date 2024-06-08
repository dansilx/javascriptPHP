<?php
    require_once("../header.php");
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    }
    
    if ($_POST) {
        if(excluirProduto($_SESSION['id'])){
            echo "<script>alert()
            </script>";
            header('Location: index.php');
        } else {
            echo '<p class="text-white">Erro ao excluir o registro!</p>';
        }
    }

    $dados = consultarProdutoId($id);
?>

    <h3 class="text-white">Excluir Produto</h3>
    <form action="" method="POST" class="bg-dark text-white">
        <!-- <input type="hidden" name="id"> -->
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
                <input type="submit" class="btn btn-outline-danger m-2" value="Excluir">
            </div>
        </div>
    </form>

<?php
     
    require_once("../footer.php");