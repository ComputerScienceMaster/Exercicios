window.onload = function onloadEx4(){
	
	let ex4 = document.getElementById('ex4');
	ex4.innerHTML = "<label>Valor minimo = 1 | valor maximo = 50</label> </br>"
	+ "<input id='qtd' type='text' placeholder='Quantidade de números' onKeyPress='return SomenteNumero(event)'>"
	+ "<input id='min' type='text' placeholder='Valor minimo' onKeyPress='return SomenteNumero(event)'>"
	+ "<input id='max' type='text' placeholder='Valor maximo' onKeyPress='return SomenteNumero(event)'>"
	+ "<input type='button' value='Calcular' onClick='criarArray()'>";

}

function SomenteNumero(e){
	var tecla=(window.event)?event.keyCode:e.which;   
	if((tecla>47 && tecla<58)) return true;
	else{
		if (tecla==8 || tecla==0) return true;
		else  return false;
	}
}

function criarArray(){
	let ex4 = document.querySelector("#ex4");

	let qtd = Number(document.getElementById('qtd').value);
	let minimo = Number(document.getElementById('min').value);
	let maximo = Number(document.getElementById('max').value);

	let arr = []
	for(let i = minimo; i < qtd; i++){
		arr.push(getNumero(minimo,maximo))
	}

	ordenar(arr)
	ex4.innerHTML = arr

}


function getNumero(minimo,maximo){
	return Math.floor((Math.random() * maximo) + minimo)
}

function ordenar(list){
	for(let i = 0; i <list.length - 1; i++){
		for (let j = i + 1; j < list.length; j++) {
			if(list[i] > list[j]) {
				let aux = list[j]
				list[j] = list[i]
				list[i] = aux

			}
		}
	}
}

