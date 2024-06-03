CREATE DATABASE escola;
USE escola;

CREATE TABLE estudantes (
    id INT AUTO_INCREMENT,
    nome VARCHAR(100),
    idade INT,
    serie VARCHAR(50),
    PRIMARY KEY (id)
);

CREATE TABLE professores (
    id INT AUTO_INCREMENT,
    nome VARCHAR(100),
    disciplina VARCHAR(50),
    formacao VARCHAR(100),
    PRIMARY KEY (id)
);

CREATE TABLE turmas (
    id INT AUTO_INCREMENT,
    nome VARCHAR(50),
    ano INT,
    professor_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (professor_id) REFERENCES professores(id)
);

CREATE TABLE matriculas (
    estudante_id INT,
    turma_id INT,
    PRIMARY KEY (estudante_id, turma_id),
    FOREIGN KEY (estudante_id) REFERENCES estudantes(id),
    FOREIGN KEY (turma_id) REFERENCES turmas(id)
);
