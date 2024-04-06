<?php
    require 'Aluno.php';

    $nome = $_POST['nome'];
    $nota = $_POST['nota'];

    $aluno = new Aluno($nome, $nota);

    $mediaAlunos = $aluno->calcMedia();
    $notaMaior = $aluno->maiorNota();

    echo "A média de alunos é {$mediaAlunos}, e a maior nota é {$notaMaior}";
