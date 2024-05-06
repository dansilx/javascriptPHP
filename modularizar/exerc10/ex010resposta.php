<?php 

    require_once "../header.php";
    require_once "Person.php";
    
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $objeto = new Person($nome, $peso, $altura);
    $calculo = number_format($objeto->calcularIMC(),2);
    $definir = $objeto->definirIMC();

    echo "<p class='text-white m-2 h2'>{$nome} seu IMC é $calculo  <br> $definir</p>";

    //echo $objeto->getPeso(); 
    
    require_once "../footer.php";