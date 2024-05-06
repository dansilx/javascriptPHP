<?php
    require_once "../header.php";
?>

    <form action="ex007resposta.php" method="post">
        <label class="form-label text-white my-3 h5">Informe uma medida em metros: </label><br>
        <input type="number" class="form-control" name="metro"><br>
        <button type="submit" class="btn btn-outline-primary mt-3">Enviar</button>
    </form>

<?php
    require_once "../footer.php";
?>