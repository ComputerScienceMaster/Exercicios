create table professor(
prof_numero INT NOT NULL,
prof_nome VARCHAR(30),
prof_rua VARCHAR(30),
prof_cidade VARCHAR(30),
PRIMARY KEY(prof_numero)
);


CREATE TABLE aluno(
aluno_numero INT NOT NULL,
aluno_nome VARCHAR(30),
aluno_rua VARCHAR(30),
aluno_cidade VARCHAR(30),
PRIMARY KEY (aluno_numero)
);



CREATE TABLE disciplina(
disc_codigo INT NOT NULL,
disc_nome VARCHAR(30),
curso_nome VARCHAR(30),
qtd_aulas integer,
PRIMARY KEY (disc_codigo)
);


CREATE TABLE matricula(
aluno_numero INT NOT NULL,
disc_codigo INT NOT NULL,
ano VARCHAR(4) NOT NULL,
PRIMARY KEY (aluno_numero, disc_codigo, ano),
FOREIGN KEY (aluno_numero) REFERENCES aluno (aluno_numero),
FOREIGN KEY (disc_codigo) REFERENCES disciplina (disc_codigo)
);

CREATE TABLE professor_disciplina(
disc_codigo integer NOT NULL,
prof_numero integer NOT NULL,
ano VARCHAR(4),
PRIMARY KEY (disc_codigo, prof_numero, ano),
FOREIGN KEY (disc_codigo) REFERENCES disciplina (disc_codigo),
FOREIGN KEY (prof_numero) REFERENCES professor (prof_numero)
);


