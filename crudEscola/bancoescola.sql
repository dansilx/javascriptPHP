CREATE DATABASE escola;
USE escola;

CREATE TABLE estudantes (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100),
    idade INT,
    serie VARCHAR(50),
    PRIMARY KEY (id)
);

CREATE TABLE professores (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100),
    disciplina VARCHAR(50),
    formacao VARCHAR(100),
    PRIMARY KEY (id)
);

CREATE TABLE turmas (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50),
    ano INT,
    professor_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (professor_id) REFERENCES professores(id)
);

CREATE TABLE matriculas (
    estudante_id INT,
    turma_id INT,
    id_matricula INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FOREIGN KEY (estudante_id) REFERENCES estudantes(id),
    FOREIGN KEY (turma_id) REFERENCES turmas(id)
);



INSERT INTO professores (nome, disciplina, formacao) VALUES 
('Maria Silva', 'Matemática', 'Mestrado em Matemática'),
('João Souza', 'História', 'Doutorado em História'),
('Ana Pereira', 'Biologia', 'Licenciatura em Biologia'),
('Carlos Alberto', 'Física', 'Mestrado em Física'),
('Luiza Ramos', 'Português', 'Doutorado em Literatura Brasileira');

INSERT INTO turmas (nome, ano, professor_id) VALUES 
('Turma A', 2024, 1),  -- Maria Silva
('Turma B', 2024, 2),  -- João Souza
('Turma C', 2024, 3),  -- Ana Pereira
('Turma D', 2024, 4),  -- Carlos Alberto
('Turma E', 2024, 5);  -- Luiza Ramos

INSERT INTO matriculas (estudante_id, turma_id) VALUES 
(1, 1),  -- Fernanda Lima in Turma A
(2, 2),  -- Gustavo Silva in Turma B
(3, 3),  -- Helena Santos in Turma C
(4, 4),  -- Igor Mendes in Turma D
(5, 5);  -- Juliana Costa in Turma E

INSERT INTO estudantes (nome, idade, serie) VALUES 
('Fernanda Lima', 14, '8ª série'),
('Gustavo Silva', 15, '9ª série'),
('Helena Santos', 13, '7ª série'),
('Igor Mendes', 12, '6ª série'),
('Juliana Costa', 14, '8ª série');