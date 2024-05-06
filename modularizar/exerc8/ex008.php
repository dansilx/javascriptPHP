<?php
    require_once "../header.php";
?>

    <form action="ex008resposta.php" method="post">
        <label class="form-label text-white my-3 h3">Informe o tamanho da área em m**2 : </label> <br>
        <input type="number" class="form-control" name="area"><br>
        <button type="submit" class="btn btn-outline-primary mt-3">Enviar</button>
    </form>

<?php
    require_once "../footer.php";
?>