<?php
// ===============================================================
//                   CONECTAR COM O BANCO
// ===============================================================
    function conectarBanco() {
        $conexao = new PDO("mysql:host=localhost; dbname=escola", "root", "");
        return $conexao;
    }

// ===============================================================
//                    INDEX ALUNO
// ===============================================================

    function retornarAlunos() {
        try {
            $sql = "SELECT  e.*, m.turma_id
                    FROM estudantes e
                    INNER JOIN matriculas m ON m.estudante_id = e.id";
                                            ;
                    
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch(Exception $e) {
            return 0;
        } 
    }

    // function retornarAluno() {
    //     try {
    //         $sql = "SELECT e.*, a.idade as aluno_id FROM estudante e 
    //                 INNER JOIN aluno_id a ON a.aluno_id = e.aluno_id";
    //         $conexao = conectarBanco();
    //         return $conexao->query($sql);
    //     } catch(Exception $e) {
    //         return 0;
    //     } 
    // }

// ===============================================================
//                    INSERIR ALUNO
// ===============================================================

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

// ===============================================================
//                    ALTERAR ALUNO
// ===============================================================

    function consultarAlunoId($id) {
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

    function alterarAluno($nome, $idade, $serie, $turma, $id) {
        try {
            $sql = "UPDATE estudantes SET nome = :nome, idade = :idade, serie = :serie, turma = :turma
                    WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":idade", $idade);
            $stmt->bindValue(":serie", $serie);
            $stmt->bindValue(":turma", $turma);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e) {
            return 0;
        }
    }

// ===============================================================
//                    EXCLUIR ALUNO
// ===============================================================

function excluirAluno($id) {
    try {
        $sql = "DELETE FROM estudantes WHERE id = :id"; 
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}

// ===============================================================
//                    INDEX PROFESSORES
// ===============================================================

function retornarProfessores() {
    try {
        $sql = "SELECT  p.*
                FROM professores p";
                                        ;
                
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch(Exception $e) {
        return 0;
    } 
}
