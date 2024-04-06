<?php 

    $valor = $_POST['valor'];
    $resultado = 1;
    for ($i=1; $i < $valor+1; $i++) {
        $resultado *= $i;  
    }

    echo "Fatorial de $valor é $resultado";