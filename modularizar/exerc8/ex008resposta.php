<?php

    require_once "../header.php";

    $_POST['area'];

    echo "<p class='text-white m-2 h2'>A quantidade de lata(s) de tinta necessária(s): ". latas($_POST['area']) . "</p><br>";
    echo "<p class='text-white m-2 h2'>Preço total: R$ ". totalLatas($_POST['area']) . "</p>";

    require_once "../footer.php";