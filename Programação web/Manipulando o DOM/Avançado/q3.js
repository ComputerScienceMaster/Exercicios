function relatorio(){
	class Aluno {
		constructor(nr, _nota){
			this.nr = nr;
			this._nota = _nota;
		}

		get nota(){
			return this._nota;
		}
	}

	let alunos = [];
	for(let i = 1; i <= 20; i++){
		let al = new Aluno(i,Math.floor(Math.random()*100));
		alunos.push(al);
	}

	function situacao(nota) {
		return nota >= 60 ?'APROVADO' : 'REPROVADO'
	}

	console.log('Notas dos alunos')
	let aprovados = 0;
	for(let i = 0; i< alunos.length; i++) {
		console.log(`Aluno nr ${alunos[i].nr} - Nota ${alunos[i].nota} ${situacao(alunos[i].nota)}`)
		if(situacao(alunos[i].nota) =='APROVADO'){
			aprovados++;
		}
	}

	console.log(`APROVADO ${Math.floor((aprovados/alunos.length)*100)}% | REPROVADOS ${Math.floor(((alunos.length-aprovados)/alunos.length)*100)}%`)
}