<?php 

    $valor = $_POST['valor'];

    for ($i=1;$i<11;$i++) {
        $resultado = $valor * $i;
        echo "$valor x $i = $resultado";
    }