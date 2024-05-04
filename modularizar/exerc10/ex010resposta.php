<?php 

    require_once "../header.php";
    require_once "Person.php";
    
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $objeto = new Person($nome, $peso, $altura);
    $calculo = $objeto->calcularIMC();
    $definir = $objeto->definirIMC();

    echo "{$nome} seu IMC é " . number_format($calculo , 2)."<br>".$definir.".";
    
    require_once "../footer.php";