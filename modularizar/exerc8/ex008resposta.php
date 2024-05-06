<?php

    require_once "../header.php";

    $area = $_POST['area'];

    $tintaLitro = $area / 3;
    $latas = ceil($tintaLitro/18);
    $total = $latas * 80; 
    $numero = number_format($total, 2, ',', '.');

    echo "<p class='text-white m-2 h2'>A quantidade de lata(s) de tinta necessária(s): $latas</p><br>";
    echo "<p class='text-white m-2 h2'>Preço total: R$ $numero</p>";

    require_once "../footer.php";