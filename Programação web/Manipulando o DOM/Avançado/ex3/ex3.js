window.onload = function onloadEx3(){
	let ex3 = document.getElementById('ex3');
	ex3.innerHTML = "<input type='button' value='Criar Relatorio' onClick='relatorio()'>";

}

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

	let ex1 = document.querySelector("#ex3");

	ex1.innerHTML = ('Notas dos alunos<br>')
	let aprovados = 0;
	for(let i = 0; i< alunos.length; i++) {
		ex1.innerHTML = ex1.innerHTML + (`Aluno Nº ${alunos[i].nr} - Nota ${alunos[i].nota} ${situacao(alunos[i].nota)}` + "<br>")
		if(situacao(alunos[i].nota) =='APROVADO'){
			aprovados++;
		}
	}

	ex1.innerHTML = ex1.innerHTML + (`APROVADO ${Math.floor((aprovados/alunos.length)*100)}% | REPROVADOS ${Math.floor(((alunos.length-aprovados)/alunos.length)*100)}%` + "<br>")
}