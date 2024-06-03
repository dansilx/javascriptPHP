<?php

    function conectarBanco() {
        $conexao = new PDO("mysql:host=localhost; dbname=bancophp", "root", "");
        return $conexao;
    }

    function retornarCategorias() {
        try {
            $sql = "SELECT * FROM estudante";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch(Exception $e) {
            return 0;
        } 
    }

    function inserirAluno($nome, $idade, $serie, $idAluno) {
        try {

            $sql = "INSERT INTO  estudante (nome, idade, serie, id_aluno) VALUES (:nome, :idade, :serie, :aluno_id)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":idade", $idade);
            $stmt->bindValue(":serie", $serie);
            $stmt->bindValue(":aluno_id", $idAluno);
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