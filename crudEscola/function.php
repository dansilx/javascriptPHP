<?php

    function conectarBanco() {
        $conexao = new PDO("mysql:host=localhost; dbname=escola", "root", "");
        return $conexao;
    }

    function retornarAlunos() {
        try {
            $sql = "SELECT  e.id, e.nome, e.idade, e.serie, m.turma_id
                    FROM estudantes e
              INNER JOIN matriculas m ON m.estudante_id = e.id";
                                            ;
                    
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch(Exception $e) {
            return 0;
        } 
    }

    function retornarTurmas() {
        try {$sql = "SELECT t.nome
                FROM turmas t";

        $conexao = conectarBanco();
        return $conexao->query($sql);
        } catch(Exception $e) {
            return 0;
        }
    }

    function inserirAluno($nome, $idade, $serie, $turma) {
        try {

            $sql = "INSERT INTO  estudantes (nome, idade, serie) VALUES (:nome, :idade, :serie)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":idade", $idade);
            $stmt->bindValue(":serie", $serie);
            $stmt->execute();
            $id = buscarIdAluno();
            criarMatricula($id, $turma);
        } catch (Exception $e) {
            return 0;
        }
    }

    function buscarIdAluno() {
        $sql = "SELECT id FROM estudantes ORDER BY id DESC LIMIT 1";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    }

    function criarMatricula($idAluno, $idTurma ) {
        $sql = "INSERT INTO matriculas (estudante_id, turma_id) VALUES (:estudante_id, :turma_id)";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":estudante_id", $idAluno);
        $stmt->bindValue(":turma_id", $idTurma);
        return $stmt->execute();
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

    function consultarProdutoId($id) {
        try {
            $sql = "SELECT * FROM produto WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (Exception $e) {
            return 0;
        }
    }