<?php
    require_once("header2.php");
?>

    <h3 class="text-white">Excluir Aluno</h3>
    <form class="bg-dark text-white">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe o nome: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="nome" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe a idade: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="idade" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label m-2">Informe a série: </label>
                <input type="text" class="form-control m-2 bg-light text-success" name="serie" disabled>
            </div>
        </div>
        <div class="rol">
            <div class="col">
                <label for="professor" class="form-label m-2 ">Selecione o ID do Aluno: </label>
                <select name="professor" id="" class="form-select m-2 bg-light text-success" disabled>
                    <option value="1">Categoria 1</option>
                    <option value="2">Categoria 2</option>
                    <option value="3">Categoria 3</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-danger ms-2 my-4">Deseja realmente excluir?!</p>
                <button type="submit" class="btn btn-outline-light m-2">Excluir</button>
            </div>
        </div>
    </form>

<?php

    require_once("footer2.php");