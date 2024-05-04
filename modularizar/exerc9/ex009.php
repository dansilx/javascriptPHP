<?php
    require_once "../header.php";
?>

    <form action="ex009resposta.php" method="post">
        <label>Informe o ano de seu nascimento: </label><br>
        <input type="number" name="anoNasc"><br>
        <button type="submit">Enviar</button>
    </form>

<?php
    require_once "../footer.php";
?>