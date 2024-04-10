<?php 
    function multiplicaArray($array, $numero) {
        $resultado = array();
        foreach ($array as $valor) {
            $resultado[] = $valor * $numero;
        }
        return $resultado;
    }


    $numeros = $_POST['numeros'];
    $multiplica = $_POST['multiplica'];
    $resultado = multiplicaArray($numeros, $multiplica);

    echo "Resultado da multiplicação de todos os elementos :<br>";
    foreach ($resultado as $valor) {
        echo $valor . "<br>";
    }
