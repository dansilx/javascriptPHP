<?php 

    require_once "../header.php";

    $valA = $_POST['valA'];
    $valB = $_POST['valB'];

    comparaNum($valA, $valB);

    require_once "../footer.php";