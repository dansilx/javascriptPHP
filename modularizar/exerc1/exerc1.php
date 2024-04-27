<?php
    require_once "../header.php";
?>

<form action="ex001resposta.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o valor: </label>
            <input type="number" class="form-control" name="valor" id="valor">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </div>
    </div>
</form>

<?php
    require_once "../footer.php";
?>

