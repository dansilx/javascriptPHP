<?php

    require_once "../header.php";

    $_POST['anoNasc'];
    define("ANO_ATUAL", date("Y"));
    
    echo "<p class='text-white m-2 h2'>-- Sua idade é ". calcIdade($_POST['anoNasc'], ANO_ATUAL) ." anos --</p>";
    echo "<p class='text-white m-2 h2'>-- Você já viveu ". diasVividos($_POST['anoNasc'], ANO_ATUAL) ." dias --</p>";
    echo "<p class='text-white m-2 h2'>-- Você terá ". idade25($_POST['anoNasc']) . " anos em 2025 --</p>";

    require_once "../footer.php";