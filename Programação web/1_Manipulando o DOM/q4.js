
function criarArray(){
	let qtd = Number(document.getElementById('qtd').value);
	let minimo = Number(document.getElementById('min').value);
	let maximo = Number(document.getElementById('max').value);

	console.log(minimo + maximo);
	let arr = []
	for(let i = minimo; i < qtd; i++){
		arr.push(getNumero(minimo,maximo))
	}

	ordenar(arr)
	console.log(arr)

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

