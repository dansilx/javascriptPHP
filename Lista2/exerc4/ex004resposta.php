<?php 

    $mes = $_POST['mes'];

    $meses = array(
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    );

    if ($mes >= 1 && $mes <= 12) {
        echo "O mês correspondente ao número $mes é: $meses[$mes] <br>";
} else {
    // Caso o número do mês seja inválido
    echo "Número de mês inválido. Por favor, digite um número de 1 a 12.";
}
    