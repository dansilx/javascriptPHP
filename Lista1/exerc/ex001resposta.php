<?php
    $valor = $_POST['valor'];
    if ($valor > 0)
        echo "Valor Positivo";
    elseif ($valor < 0)
        echo "Valor negativo";
    else 
        echo "Valor igual a zero!";