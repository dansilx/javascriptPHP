<?php
    require_once "../header.php";

    $_POST['valor'];

    echo "<p class='text-white m-5 h3'>Fatorial de ".$_POST['valor']." é ".fatorial($_POST['valor']). "</p>";

    require_once "../footer.php";