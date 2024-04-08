<?php 

    $negativos = 0;
    $positivos = 0;
    $pares = 0;
    $impares = 0;
    
    
    $numeros = array();
    for($i=0;$i<10;$i++) {
        $numeros[] = $_POST["numero$i"];
    }

    foreach ($numeros as $numero) {
        if($numero < 0) {
            $negativos++;
        } else {
            $positivos++;
        }
    
        if($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }
    
    echo "Quantidade de números positivos: " . $positivos . "<br>";
    echo "Quantidade de números negativos: " . $negativos . "<br>";
    echo "Quantidade de números pares: " . $pares . "<br>";
    echo "Quantidade de números ímpares: " . $impares . "<br>";