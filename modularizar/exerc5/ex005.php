<?php
    require_once "../header.php";
?>

    <form action="ex005resposta.php" method="post">
        <label for="" class="form-label text-white my-3 h4">Informe um número para calcular o fatorial: </label> <br>
        <input type="number" class="form-control" name="valor"> <br>
        <button type="submit" class="btn btn-outline-primary mt-3">Enviar</button>
    </form>

<?php
    require_once "../footer.php";
?>
