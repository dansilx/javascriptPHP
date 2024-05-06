<?php
    require_once "../header.php";
?>

    <form action="ex003resposta.php" method="post">
        <label class="form-label text-white my-3 h4">Calcule dois números:</label><br>
        <input type="number" class="form-control" name="valor1"><br>
        <input type="number" class="form-control" name="valor2"><br>
        <button type="submit" class="btn btn-outline-primary mt-3">Enviar</button>

    </form>

<?php
    require_once "../footer.php";
?>
