<?php 

    require_once 'Aluno.php';

    $alunos = array();
    $aprovados = [];
    $reprovados = [];

    foreach($_POST['nome'] as $key => $nome) 
    {
        $nota1 = (float) $_POST['nota1'][$key];
        $nota2 = (float) $_POST['nota2'][$key];

        $alunos[] = new Aluno($nome, $nota1, $nota2);        
    }

    echo "<h3> Alunos Aprovados: </h3>";
    foreach($alunos as $aluno) {
        if ($aluno->getMedia() >= 6.0) {
            echo "<p>{$aluno->getNome()} - Média: {$aluno->getMedia()}</p>";
        }
    }

    echo "<h3> Alunos Reprovados: </h3>";
    foreach($alunos as $aluno) {
        if ($aluno->getMedia() < 6.0) {
            echo "<p>{$aluno->getNome()}</p>";
        }
    }