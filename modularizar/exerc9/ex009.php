<?php
    require_once "../header.php";
?>

    <form action="ex009resposta.php" method="post">
        <label class="form-label text-white my-3 h3">Informe o ano de seu nascimento: </label><br>
        <input type="number" class="form-control" name="anoNasc"><br>
        <button type="submit" class="btn btn-outline-primary mt-3">Enviar</button>
    </form>

<?php
    require_once "../footer.php";
?>