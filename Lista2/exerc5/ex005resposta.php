<?php 
    
    function primo(int $numero): bool {
        if ($numero <= 1) {
            return false;
        }
        for ($i=2;$i <= sqrt($numero);$i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $numeros = $_POST['numeros'];

    foreach ($numeros as $numero){
        if(primo($numero)) {
            echo "$numero é um número primo. <br>";
        } else {
            echo "$numero não é um número primo. <br>";
        }
    }