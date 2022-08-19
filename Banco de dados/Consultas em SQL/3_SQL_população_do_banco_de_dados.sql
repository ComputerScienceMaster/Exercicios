INSERT INTO aluno VALUES (1, ' Tiago Mateus Junior', '210', 'Palmas');
INSERT INTO aluno VALUES (2, 'Luciana Gomes', '202', 'Palmas');
INSERT INTO aluno VALUES (3, 'João Mateus', '2300', 'Gurupi');
INSERT INTO aluno VALUES (4, 'José Silva', '1024', 'Paraíso');
INSERT INTO aluno VALUES (5, 'Juraci', '106', 'Miranorte');
INSERT INTO aluno VALUES (6, 'Paulo', '101', 'Goianorte');
INSERT INTO aluno VALUES (7, 'Adriana Calcanhoto', 'rua Alvorada', 'Paraíso');
INSERT INTO aluno VALUES (8, 'Rosane', 'rua das flores', 'Guaraí');
INSERT INTO aluno VALUES (9, 'Mara', 'rua das águas', 'Porto Nacional');
INSERT INTO aluno VALUES (10, 'Julia', 'rua de madeira', 'Paraíso');
INSERT INTO aluno VALUES (11, 'Julia', 'rua de madeira', 'Palmas');

INSERT INTO professor VALUES (1, 'João José', '103', 'Palmas');
INSERT INTO professor VALUES (2, 'Maria José', '201', 'Palmas');
INSERT INTO professor VALUES (3, 'Bruno', '305', 'Paraiso');
INSERT INTO professor VALUES (4, 'José Ricardo', '1106', 'Porto Nacional');
INSERT INTO professor VALUES (5, 'Manuela', '120', 'Araguaína');
INSERT INTO professor VALUES (6, 'Bruno', '1003', 'Porto Nacional');
INSERT INTO professor VALUES (7, 'Luciana', ' 100', 'Miracema');
INSERT INTO professor VALUES (8, 'Paulo', ' 150', 'Palmas');
INSERT INTO professor VALUES (9, 'Lual', '1006', 'Paraíso');
INSERT INTO professor VALUES (10, 'Antonio Marcos', '170', 'Araguaína');


INSERT INTO disciplina (disc_codigo, disc_nome, curso_nome, qtd_aulas) VALUES (1, ' Química', 'Ensino Médio', 4);
INSERT INTO disciplina (disc_codigo, disc_nome, curso_nome, qtd_aulas) VALUES (2, ' Biologia', 'Ensino Médio', 4);
INSERT INTO disciplina (disc_codigo, disc_nome, curso_nome, qtd_aulas) VALUES (3, 'História', 'Ensino Médio', 2);
INSERT INTO disciplina (disc_codigo, disc_nome, curso_nome, qtd_aulas) VALUES (4, ' Religião', 'Ensino Médio', 2);
INSERT INTO disciplina (disc_codigo, disc_nome, curso_nome, qtd_aulas) VALUES (5, ' Português', 'Ensino Pós Médio', 4);
INSERT INTO disciplina (disc_codigo, disc_nome, curso_nome, qtd_aulas) VALUES (6, 'Física', 'Ensino Pós Médio', 6);
INSERT INTO disciplina (disc_codigo, disc_nome, curso_nome, qtd_aulas) VALUES (7, 'Matemática', 'Ensino Pós Médio', 4);
INSERT INTO disciplina (disc_codigo, disc_nome, curso_nome, qtd_aulas) VALUES (8, 'Geografia ', 'Ensino Pós Médio', 2);
INSERT INTO disciplina (disc_codigo, disc_nome, curso_nome, qtd_aulas) VALUES (9, 'Informática Aplicada', 'CST Sistemas para Internet', 4);
INSERT INTO disciplina (disc_codigo, disc_nome, curso_nome, qtd_aulas) VALUES (10, 'Banco de dados', 'CST Sistemas para Internet', 4);
INSERT INTO disciplina (disc_codigo, disc_nome, curso_nome, qtd_aulas) VALUES (11, 'Programação de Banco de dados', 'Computação', 4);


INSERT INTO matricula (aluno_numero, disc_codigo, ano) VALUES (1, 10, '2018');
INSERT INTO matricula (aluno_numero, disc_codigo, ano) VALUES (1, 4, '2018');
INSERT INTO matricula (aluno_numero, disc_codigo, ano) VALUES (1, 6, '2018');
INSERT INTO matricula (aluno_numero, disc_codigo, ano) VALUES (5, 3, '2018');
INSERT INTO matricula (aluno_numero, disc_codigo, ano) VALUES (6, 1, '2018');
INSERT INTO matricula (aluno_numero, disc_codigo, ano) VALUES (2, 6, '2018');
INSERT INTO matricula (aluno_numero, disc_codigo, ano) VALUES (7, 9, '2018');
INSERT INTO matricula (aluno_numero, disc_codigo, ano) VALUES (8, 10, '2018');
INSERT INTO matricula (aluno_numero, disc_codigo, ano) VALUES (9, 1, '2018');
INSERT INTO matricula (aluno_numero, disc_codigo, ano) VALUES (2, 2, '2018');
INSERT INTO matricula (aluno_numero, disc_codigo, ano) VALUES (11, 11, '2018');

INSERT INTO professor_disciplina (disc_codigo, prof_numero, ano) VALUES (1, 10, '2018');
INSERT INTO professor_disciplina (disc_codigo, prof_numero, ano) VALUES (2, 5, '2018');
INSERT INTO professor_disciplina (disc_codigo, prof_numero, ano) VALUES (3, 7, '2018');
INSERT INTO professor_disciplina (disc_codigo, prof_numero, ano) VALUES (4, 4, '2018');
INSERT INTO professor_disciplina (disc_codigo, prof_numero, ano) VALUES (5, 9, '2018');
INSERT INTO professor_disciplina (disc_codigo, prof_numero, ano) VALUES (6, 2, '2018');
INSERT INTO professor_disciplina (disc_codigo, prof_numero, ano) VALUES (7, 3, '2018');
INSERT INTO professor_disciplina (disc_codigo, prof_numero, ano) VALUES (8, 9, '2018');
INSERT INTO professor_disciplina (disc_codigo, prof_numero, ano) VALUES (9, 6, '2018');
INSERT INTO professor_disciplina (disc_codigo, prof_numero, ano) VALUES (10, 3, '2018');
INSERT INTO professor_disciplina (disc_codigo, prof_numero, ano) VALUES (11, 5, '2018');