<?php
    require_once "header.php";

        $valor1 = $_POST['valor1'];        
        $valor2 = $_POST['valor2'];

        echo '<p class="text-danger">O valor da soma é: '.somar($valor1, $valor2).'</p>';
        echo '<p class="text-danger">O valor da subtração é: '.subtrair($valor1, $valor2).'</p>';
        echo '<p class="text-danger">O valor da multiplicação é: '.multiplicar($valor1, $valor2).'</p>';
        echo '<p class="text-danger">O valor da divisão é: '.dividir($valor1, $valor2).'</p>';


    require_once "footer.php";
