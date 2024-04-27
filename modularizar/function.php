<?php
    
    function exibirData(){
        echo "Hoje é dia ".date("d/m/Y");
    }

    function somar($n1, $n2) {
        return $n1 + $n2;
    } 

    function subtrair($n1, $n2) {
        return $n1 - $n2;
    }

    function multiplicar($n1, $n2) {
        return $n1 * $n2;
    }

    function dividir($n1, $n2) {
        return $n1 / $n2;
    }

    function positivoNegativo($n) {
        if ($n > 0) {
            return "Valor Positivo";
        } elseif($n < 0) {
            return "Valor Negativo";
        } else {
            return "Igual a Zero!";
        }
    }