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
            $sql = "SELECT  e.*, m.id_matricula, m.turma_id
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
            if ($id) {
                $matricula = criarMatricula($id, $turma);
                return $matricula;
            } else {
                throw new Exception("Falha ao buscar o ID do aluno");
            }

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
            $sql = "SELECT * FROM estudantes WHERE id = :id";
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

// ===============================================================
//                    INSERIR PROFESSOR
// ===============================================================

function inserirProf($nome, $disciplina, $formacao) {
    try {

        $sql = "INSERT INTO  professores (nome, disciplina, formacao) VALUES (:nome, :disciplina, :formacao)";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":disciplina", $disciplina);
        $stmt->bindValue(":formacao", $formacao);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}

// ===============================================================
//                    ALTERAR PROFESSOR
// ===============================================================

function consultarProfId($id) {
    try {
        $sql = "SELECT * FROM professores WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    } catch (Exception $e) {
        return 0;
    }
}

function alterarProf($nome, $disciplina, $formacao, $id) {
    try {
        $sql = "UPDATE professores SET nome = :nome, disciplina = :disciplina, formacao = :formacao
                WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":idade", $disciplina);
        $stmt->bindValue(":serie", $formacao);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}

// ===============================================================
//                    EXCLUIR PROFESSOR
// ===============================================================

function excluirProf($id) {
    try {
        $sql = "DELETE FROM professores WHERE id = :id"; 
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}

// ===============================================================
//                    INDEX TURMA
// ===============================================================

function mostrarTurma() {
    try {
        $sql = "SELECT  t.*, p.nome as nome_professor
                FROM turmas t
                INNER JOIN professores p ON p.id = t.professor_id";
                
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch(Exception $e) {
        return 0;
    } 
}

// ===============================================================
//                    INSERIR TURMA
// ===============================================================

function inserirTurma($nome, $ano, $professor_id) {
    try {

        $sql = "INSERT INTO  turmas (nome, ano, professor_id) VALUES (:nome, :ano, :professor_id)";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":ano", $ano);
        $stmt->bindValue(":professor_id", $professor_id);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}

// ===============================================================
//                    ALTERAR TURMA
// ===============================================================

function consultarTurmaId($id) {
    try {
        $sql = "SELECT * FROM turmas WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    } catch (Exception $e) {
        return 0;
    }
}

function alterarTurma($nome, $ano, $professor_id, $id) {
    try {
        $sql = "UPDATE professores SET nome = :nome, ano = :ano, professor_id = :professor_id
                WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":ano", $ano);
        $stmt->bindValue(":professor_id", $professor_id);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}

// ===============================================================
//                    EXCLUIR TURMA
// ===============================================================

function excluirTurma($id) {
    try {
        $sql = "DELETE FROM turmas WHERE id = :id"; 
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}
