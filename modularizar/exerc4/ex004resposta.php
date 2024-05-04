<?php 

    require_once "../header.php";

    $valor = $_POST['valor'];

    for ($i=1;$i<11;$i++) {
        $resultado = $valor * $i;
        echo "$valor x $i = $resultado <br>";
    }

    require_once "../footer.php";