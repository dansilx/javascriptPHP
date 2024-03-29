<?php 
    require 'Person.php';

    if($_SERVER["REQUEST_MODE"] == "POST") {     
        $nome = $_POST['nome'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $objeto = new Person($nome, $peso, $altura, $imc);
        $calculo = $objeto->calcularIMC();
        $definir = $objeto->definirIMC();

        echo "{$nome} seu IMC é " . number_format($calculo , 2)."<br>".$definir.".";
    }