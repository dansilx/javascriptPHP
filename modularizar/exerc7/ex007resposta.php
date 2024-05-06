<?php  

    require_once "../header.php";

    $metro = $_POST['metro'];
    $centimetro = $metro * 100;
    echo "<p class='text-white m-5 h2'>$metro m = $centimetro cm</p>";

    require_once "../footer.php";