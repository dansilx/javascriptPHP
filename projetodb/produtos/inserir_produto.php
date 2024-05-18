<?php
    require_once("../header.php");
?>

    <h3 class="text-white">Inserir Produto</h3>
    <form class="bg-dark text-white">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o nome: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe a descrição: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="descricao">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o valor: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="valor">
            </div>
        </div>
        <div class="rol">
            <div class="col">
                <label for="categoria" class="form-label m-2 ">Selecione a categoria: </label>
                <select name="categoria" id="" class="form-select m-2 bg-secondary text-white">
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

    require_once("../footer.php");