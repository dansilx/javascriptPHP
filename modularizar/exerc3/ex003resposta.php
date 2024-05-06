<?php
    require_once "../header.php";


    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    echo "<p class='text-white m-5 h4'> O resultado é ".somaOuTriple($valor1, $valor2)."</p>";


    require_once "../footer.php";

