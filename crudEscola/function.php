<?php

    function conectarBanco() {
        $conexao = new PDO("mysql:host=localhost; dbname=bancoescola", "root", "");
        return $conexao;
    }

    function retornarAlunos() {
        try {
            $sql = "SELECT * FROM estudantes";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch(Exception $e) {
            return 0;
        } 
    }

    function inserirAluno($nome, $idade, $serie, $idAluno) {
        try {

            $sql = "INSERT INTO  estudante (nome, idade, serie, id) VALUES (:nome, :idade, :serie, :id)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":idade", $idade);
            $stmt->bindValue(":serie", $serie);
            $stmt->bindValue("id", $idAluno);
            return $stmt->execute();
        } catch (Exception $e) {
            return 0;
        }
    }

    function retornarAluno() {
        try {
            $sql = "SELECT e.*, a.idade as aluno_id FROM estudante e 
                    INNER JOIN aluno_id a ON a.aluno_id = e.aluno_id";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch(Exception $e) {
            return 0;
        } 
    }