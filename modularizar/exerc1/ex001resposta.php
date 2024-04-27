<?php
    require_once "../header.php";


    $_POST['valor'];

    echo '<p class="text-danger">Resposta: ' . positivoNegativo($_POST['valor']) . '</p>';


    require_once "../footer.php";
