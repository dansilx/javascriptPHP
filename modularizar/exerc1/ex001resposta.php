<?php
    require_once "../header.php";


    $_POST['valor'];

    echo '<p class=" text-white m-5 h4">Resposta: ' . positivoNegativo($_POST['valor']) . '</p>';


    require_once "../footer.php";
