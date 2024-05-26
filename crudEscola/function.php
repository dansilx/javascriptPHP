<?php

    function conectarBanco() {
        $conexao = new PDO("mysql:host=localhost; dbname=bancophp", "root", "");
        return $conexao;
    }

    function retornarCategorias() {
        try {
            $sql = "SELECT * FROM categoria";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch(Exception $e) {
            return 0;
        } 
    }

    function inserirAluno($nome, $idade, $serie, $professor) {
        try {

            $sql = "INSERT INTO produto (nome, descricao, valor, categoria_id) VALUES (:nome, :descricao, :valor, :categoria)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":idade", $idade);
            $stmt->bindValue(":serie", $serie);
            $stmt->bindValue(":professor", $professor);
            return $stmt->execute();
        } catch (Exception $e) {
            return 0;
        }
    }

    function retornarAluno() {
        try {
            $sql = "SELECT p.*, c.descricao as categoria FROM produto p 
                    INNER JOIN categoria c ON c.id = p.categoria_id";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch(Exception $e) {
            return 0;
        } 
    }