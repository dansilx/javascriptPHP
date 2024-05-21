<?php  

    require_once "../header.php";

    $_POST['metro'];

    echo "<p class='text-white m-5 h2'>" . $_POST['metro'] . " m = " . cmtoM($_POST['metro']) . "cm</p>";

    require_once "../footer.php";