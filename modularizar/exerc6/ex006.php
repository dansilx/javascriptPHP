<?php
    require_once "../header.php";
?>

    <form action="ex006resposta.php" method="post">
        <label class="form-label text-white my-3 h5">Informe um primeiro valor: </label><br>
        <input type="number" class="form-control" name="valA"><br>
        <label class="form-label text-white my-3 h5">Informe um segundo valor: </label><br>
        <input type="number" class="form-control" name="valB"><br><br>
        <button type="submit" class="btn btn-outline-primary mt-3">Enviar</button>
    </form>

<?php
    require_once "../footer.php";
?>
