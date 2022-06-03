window.onload = function onloadEx2(){
	
	let ex2 = document.getElementById('ex2');
	ex2.innerHTML = "<label>Valor minimo = 1 | valor maximo = 12</label> </br>"
	+ "<input id='fatorial' type='text' placeholder='Valor minimo' >"
	+ "<input type='button' value='Calcular' onClick='fatorial()'>";

}

function fatorial(){

	let inicio = new Date().getTime();

	let fat = document.getElementById('fatorial');
	let number = Number(fat.value);
	let result=1;
	for(i = 1; i <= number; i++){
		result = result * i;
	}

	let fim = new Date().getTime();
	alert(`${number}! =  ${result} - durou ${fim - inicio} milisegundos`)
}
