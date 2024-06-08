<?php
    require_once("header2.php");
?>

    <h3 class="text-white">Alterar Aluno</h3>
    <form class="bg-success text-white">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o nome: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe a idade: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="descricao">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o valor: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="valor">
            </div>
        </div>
        <div class="rol">
            <div class="col">
                <label for="categoria" class="form-label m-2 ">Selecione a categoria: </label>
                <select name="categoria" id="" class="form-select m-2 bg-secondary text-white">
                    <option value="1">Categoria 1</option>
                    <option value="2">Categoria 2</option>
                    <option value="3">Categoria 3</option>
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

    require_once("footer2.php");
