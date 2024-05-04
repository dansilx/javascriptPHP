<?php
    require_once "../header.php";
?>

    <form action="ex006resposta.php" method="post">
        <label>Informe um primeiro valor: </label><br>
        <input type="number" name="valorA"><br>
        <label>Informe um segundo valor: </label><br>
        <input type="number" name="valorB"><br><br>
        <button type="submit">Enviar</button>
    </form>

<?php
    require_once "../footer.php";
?>
