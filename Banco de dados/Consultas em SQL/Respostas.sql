-- 1 - Crie uma consulta com todas as disciplinas oferecidas no ano de 2018, constando os nomes das disciplinas, nomes e cidades dos professores responsáveis e nomes dos cursos das disciplinas.


SELECT disciplina.disc_codigo, disciplina.disc_nome, professor.prof_nome, professor.prof_cidade, disciplina.curso_nome, matricula.ano
FROM disciplina, professor, matricula, aluno, professor_disciplina
WHERE disciplina.disc_codigo = matricula.disc_codigo AND aluno.aluno_numero = matricula.aluno_numero
AND professor.prof_numero = professor_disciplina.prof_numero AND disciplina.disc_codigo = professor_disciplina.disc_codigo AND professor_disciplina.ano =  matricula.ano 
AND matricula.ano = '2018'

-- 2 - Crie uma consulta que mostre todos os nomes dos professores do curso de CST Sistemas para Internet, no ano de 2018, e os nomes das disciplinas pelas quais são responsáveis.

SELECT professor.prof_nome, disciplina.disc_nome, disciplina.curso_nome
FROM professor, matricula, disciplina, professor_disciplina
WHERE professor.prof_numero = professor_disciplina.prof_numero 
AND disciplina.disc_codigo = professor_disciplina.disc_codigo
AND disciplina.disc_codigo = matricula.disc_codigo
AND disciplina.curso_nome = 'CST Sistemas para Internet' AND matricula.ano = '2018' GROUP BY disc_nome