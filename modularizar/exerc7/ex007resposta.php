<?php  

    require_once "../header.php";

    $metro = $_POST['metro'];
    $centimetro = $metro * 100;
    echo "$metro m = $centimetro cm";

    require_once "../footer.php";