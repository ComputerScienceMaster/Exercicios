window.onload = function onloadEx5() {
  let ex5 = document.getElementById("ex5");
  ex5.innerHTML =
    "<label>Digite o valor dos lados do triangulo</label> </br>" +
    "<input id='lado1' type='text' placeholder='Lado 1' onKeyPress='return SomenteNumero(event)'>" +
    "<input id='lado2' type='text' placeholder='Lado 2' onKeyPress='return SomenteNumero(event)'>" +
    "<input id='lado3' type='text' placeholder='Lado 3' onKeyPress='return SomenteNumero(event)'>" +
    "<input type='button' value='Calcular' onClick='verificaTriangulo()'>";
};

function verificaTriangulo() {
  lado1 = Number(document.getElementById("lado1").value);
  lado2 = Number(document.getElementById("lado2").value);
  lado3 = Number(document.getElementById("lado3").value);

  let resposta = "";
  if (lado1 == lado2 && lado2 == lado3) {
    resposta = "equilatero";
  } else {
    if (lado1 != lado2 && lado2 != lado3 && lado1 != lado3) {
      resposta = "escaleno";
    } else {
      resposta = "isosceles";
    }
  }
  alert("esse triangulo eh: " + resposta);
}
