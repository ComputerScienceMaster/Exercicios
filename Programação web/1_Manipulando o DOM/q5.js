function verificaTriangulo() {
	lado1 = Number(document.getElementById('lado1').value);
	lado2 = Number(document.getElementById('lado2').value);
	lado3 = Number(document.getElementById('lado3').value);
	

	let resposta = ''
	if(lado1 == lado2 && lado2 == lado3){
		resposta = 'equilatero'
	} else {
		if(lado1 != lado2 && lado2 != lado3 && lado1 != lado3) {
			resposta = 'escaleno'
		} else {
			resposta = 'isosceles'
	}
}
	console.log("esse triangulo eh: " + resposta);

}