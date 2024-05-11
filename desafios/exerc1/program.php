<?php

    session_start();

    if(isset($_SESSION['voltas'])){
        $voltas = intval($_SESSION['voltas']);
        
    }

    $tempoVolta = array();
    
    for ($i=0; $i < $voltas; $i++ ) {
        $hora = rand(0, 23);
        $minuto = rand(0,59);
        $segundo = rand(0,59);

        $dataHora = new DateTime();
        $dataHora->setTime($hora, $minuto, $segundo);
        
        $tempoVolta = $dataHora;
    }

