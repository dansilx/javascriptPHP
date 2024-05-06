<?php

    require_once "../header.php";

    $numeros = $_POST['numeros'];
    $array = menorValor($numeros);
    echo "<p class='text-white m-5 h4'> O menor valor é ". $array['menor'].", e sua posição é ". $array['posicao'] .".</p>";

    require_once "../footer.php";