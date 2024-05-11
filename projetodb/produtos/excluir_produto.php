<?php
    require_once("../header.php");
?>

    <h3 class="text-white">Excluir Produto</h3>
    <form class="bg-dark text-white">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o nome: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="nome" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe a descrição: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="descricao" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o valor: </label>
                <input type="text" class="form-control m-2 bg-secondary text-white" name="valor" disabled>
            </div>
        </div>
        <div class="rol">
            <div class="col">
                <label for="categoria" class="form-label m-2 ">Selecione a categoria: </label>
                <select name="categoria" id="" class="form-select m-2 bg-secondary text-white" disabled>
                    <option value="1">Categoria 1</option>
                    <option value="2">Categoria 2</option>
                    <option value="3">Categoria 3</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-danger ms-2 my-4">Deseja realmente excluir?!</p>
                <button type="submit" class="btn btn-outline-danger m-2">Excluir</button>
            </div>
        </div>
    </form>

<?php

    require_once("../footer.php");