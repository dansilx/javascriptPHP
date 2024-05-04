<?php
    require_once "../header.php";
?>

    <form action="ex008resposta.php" method="post">
        <label>Informe o tamanho da área em m**2 : </label> <br>
        <input type="number" name="area"><br>
        <button type="submit">Enviar</button>
    </form>

<?php
    require_once "../footer.php";
?>