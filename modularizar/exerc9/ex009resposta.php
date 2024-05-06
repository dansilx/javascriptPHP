<?php

    require_once "../header.php";

    function calcIdade($anoNasc, $anoAtual) {
        return $idade = $anoAtual - $anoNasc;
    }
    
    function diasVividos($anoNasc, $anoAtual) {
        return $diasVividos = ($anoAtual -$anoNasc) * 365;
    }

    function idade25($anoNasc) {
        return $idade25 = 2025 - $anoNasc;
    }

    $anoNasc = $_POST['anoNasc'];
    define("ANO_ATUAL", date("Y"));
    
    $idade = calcIdade($anoNasc, ANO_ATUAL);

    $diasVividos = diasVividos($anoNasc, ANO_ATUAL);

    $idade25 = idade25($anoNasc );

    echo "<p class='text-white m-2 h2'>-- Sua idade é $idade anos --</p>";
    echo "<p class='text-white m-2 h2'>-- Você já viveu $diasVividos dias --</p>";
    echo "<p class='text-white m-2 h2'>-- Você terá $idade25 anos em 2025 --</p>";

    require_once "../footer.php";