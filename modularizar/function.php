<?php
    
    function exibirData(){
        $date = date("d/m/Y");
        echo "<div class='text-white m-4'> Hoje é dia $date </div>";
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

    function menorValor($numeros) {
        $menor = min($numeros);
        $posicao = (array_search($menor, $numeros) + 1) . "º";
        return array('menor' => $menor, 'posicao' => $posicao);
    }

    function somaOuTriple($n1, $n2) {
        if($n1 == $n2) {
            return $n1 * 3;
        } else {
            return $n1 + $n2;
        }
    }

    function tabuada($num) {
        for ($i=1;$i<=10;$i++) {
            $resultado = $num * $i;
            echo "<p class='text-white m-1 h4'>$num x $i = $resultado </p><br>";
        }
    }

    function fatorial($num) {
        $resultado = 1;
        for ($i=1; $i < $num+1; $i++) {
            $resultado *= $i;  
        }

        return $resultado;
    }

    function comparaNum($nums) {
        if ($nums[0] > $nums[1]) {
            return "<p class='text-white m-5 h2'> $nums[1] $nums[0] </p>";
        }
    
        if ($nums[1] > $nums[0]) {
            return "<p class='text-white m-5 h2'>$nums[0] $nums[1]</p>";
        }
    
        if ($nums[0] == $nums[1]) {
            return "<p class='text-white m-5 h3'>Números iguais: $nums[0]</p>";
        }
    }