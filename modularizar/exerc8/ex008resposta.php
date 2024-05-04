<?php

    require_once "../header.php";

    $area = $_POST['area'];

    $tintaLitro = $area / 3;
    $latas = ceil($tintaLitro/18);
    $total = $latas * 80; 

    echo "A quantidade de lata(s) de tinta necessária(s): $latas<br>";
    echo "Preço total: R$ ".number_format($total, 2, ',', '.');

    require_once "../footer.php";