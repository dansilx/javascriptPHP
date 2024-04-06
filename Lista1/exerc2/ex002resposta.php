<?php
    $menor = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $valor4 = $_POST['valor4'];
    $valor5 = $_POST['valor5'];
    $valor6 = $_POST['valor6'];
    $valor7 = $_POST['valor7'];

    $count = "1º";

    if ($menor > $valor2) {
        $menor = $valor2;
        $count = "2º";
    }
    if ($menor > $valor3){
        $menor = $valor3;
        $count = "3º";
    }
    if ($menor > $valor4){
        $menor = $valor4;
        $count = "4º";
    }
    if ($menor > $valor5){
        $menor = $valor5;
        $count = "5º";
    }
    if ($menor > $valor6){
        $menor = $valor6;
        $count = "6º";
    }
    if ($menor > $valor7){
        $menor = $valor7;
        $count = "7º";
    } 

    echo "O menor valor é $menor, e sua posição é $count.";