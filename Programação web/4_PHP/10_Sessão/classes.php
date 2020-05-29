<?php

// de acordo com as regras da orientação a objetos não é "correto" colocar atributos como públicos, visto que fere o encapsulamento. No entanto, nesse exercício não fará tanta diferença.

	class Produto{
		public $idProduto;
		public $nome;
		public $descricao;
		public $imagem;
		public $preco;

	}


	class Carrinho{
		public $idCarrinho;
		public $produtos;
		public $precoTotal;


		public function calcularTotal(){
			$soma = 0;
			foreach ($this->produtos as $prod) {
				$soma += $prod->preco;
			}
			$this->precoTotal = $soma;
		}

	}



?>