function fatorial(){

	let inicio = new Date().getTime();

	let fat = document.getElementById('fatorial');
	let number = Number(fat.value);
	let result=1;
	for(i = 1; i <= number; i++){
		result = result * i;
	}

	let fim = new Date().getTime();
	console.log(`${number}! =  ${result} - durou ${fim - inicio} milisegundos`)
}
