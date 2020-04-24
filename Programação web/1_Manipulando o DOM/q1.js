window.onload = function onloadq1(){
	let q1 = document.getElementById('q1');
	q1.innerHTML = "<label>Valor minimo = 1 | valor maximo = 50</label> </br>"
	+ "<input id='minimo' type='text' placeholder='Valor minimo' onKeyPress='return SomenteNumero(event)'>"
	+ "<input id='maximo' type='text' placeholder='Valor maximo' onKeyPress='return SomenteNumero(event)'>"
	+ "<input type='button' value='Calcular' onClick='exibirNumeros()'>";

	let q2 = document.getElementById('q2');
	q2.innerHTML = "<label>Valor minimo = 1 | valor maximo = 12</label> </br>"
	+ "<input id='fatorial' type='text' placeholder='Valor minimo' >"
	+ "<input type='button' value='Calcular' onClick='fatorial()'>";

	let q3 = document.getElementById('q3');
	q3.innerHTML = "<input type='button' value='Criar Relatorio' onClick='relatorio()'>";

	let q4 = document.getElementById('q4');
	q4.innerHTML = "<label>Valor minimo = 1 | valor maximo = 50</label> </br>"
	+ "<input id='qtd' type='text' placeholder='Quantidade de números' onKeyPress='return SomenteNumero(event)'>"
	+ "<input id='min' type='text' placeholder='Valor minimo' onKeyPress='return SomenteNumero(event)'>"
	+ "<input id='max' type='text' placeholder='Valor maximo' onKeyPress='return SomenteNumero(event)'>"
	+ "<input type='button' value='Calcular' onClick='criarArray()'>";

	let q5 = document.getElementById('q5');
	q5.innerHTML = "<label>Digite o valor dos lados do triangulo</label> </br>"
	+ "<input id='lado1' type='text' placeholder='Lado 1' onKeyPress='return SomenteNumero(event)'>"
	+ "<input id='lado2' type='text' placeholder='Lado 2' onKeyPress='return SomenteNumero(event)'>"
	+ "<input id='lado3' type='text' placeholder='Lado 3' onKeyPress='return SomenteNumero(event)'>"
	+ "<input type='button' value='Calcular' onClick='verificaTriangulo()'>";

	let q6 = document.getElementById('q6');
	q6.innerHTML = ' <h1>login</h1> 	<div id="nao_logado"> <input id="username" type="text"> '
	+ '<input id="password" type="password"> <button onclick="logar()">Login</button>'
	+ '<br/><br/><div>Novo Usuario</div> <input id="new_user" type="text"> <input id="new_password" type="password">'
	+ '<button onclick="criarUsuarioNovo()">Criar</button>	</div> <div id="messages"></div>	<div id="logado" style="visibility:hidden"> <div>Logado</div>'
	+ '<button onclick="deslogar()">Deslogar</button> </div> <script src="q6.js"> 	</script> </body> </html>';

}

function SomenteNumero(e){
	var tecla=(window.event)?event.keyCode:e.which;   
	if((tecla>47 && tecla<58)) return true;
	else{
		if (tecla==8 || tecla==0) return true;
		else  return false;
	}
}

function exibirNumeros(){


	let minimo = document.getElementById('minimo');
	let maximo = document.getElementById('maximo');
	if(Number(minimo.value) < Number(maximo.value)){

		let numAlvo = 0;
		for(var count = minimo.value; count < Number(maximo.value); count ++){
			if ((count % 2 == 0)&&(count % 3 == 0)){
				numAlvo++;	
			}
		}
		console.log("A quantidade de números que atende a regra é "+numAlvo);	
	}else{
		alert("O numero minimo eh maior que o maximo");
	}
}
