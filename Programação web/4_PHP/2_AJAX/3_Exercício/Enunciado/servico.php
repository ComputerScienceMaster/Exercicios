<?php 

class Descricao{
	public $idProduto;
	public $precoProduto;
	public $marcaProduto;
	public $descricaoProduto;
}

class Produto{
	public $idProduto;
	public $imagem;
	public $nomeProduto;
}

$produtos = array();
$descricoes = array();


$p1 = new Produto();
$p2 = new Produto();
$p3 = new Produto();

$dp1 = new Descricao();
$dp2 = new Descricao();
$dp3 = new Descricao();

#----------------------------------- produto 01 -----------------------------------------

$p1->idProduto = 1;
$p1->imagem = "https://formulachopp.cdn.3techstore.com.br/img/p/7/6/0/760-large_default.jpg";
$p1->nomeProduto = 'Pepsi Twist';

$dp1->idProduto = 1;
$dp1->precoProduto = 5.5;
$dp1->marcaProduto = 'pepsico';
$dp1->descricaoProduto = 'Este produto é gaseificado contendo açúcar e diversos aromatizantes. O produto tem baixo valor nutricional porém é rico em calorias e açúcares. É recomendado que o consumidor tenha parcimômia em consumi-lo';




#----------------------------------- produto 02 -----------------------------------------

$p2->idProduto = 2;
$p2->imagem = "http://tendaatacado.vteximg.com.br/arquivos/ids/216272/341290.jpg?v=636840187530570000";
$p2->nomeProduto = 'Dolly guaraná';

$dp2->idProduto = 2;
$dp2->precoProduto = 4.2;
$dp2->marcaProduto = 'Dolly';
$dp2->descricaoProduto = 'Este produto é gaseificado contendo açúcar e diversos aromatizantes. Tem um gosto terrível e ninguém deveria tomar.';

#----------------------------------- produto 03 -----------------------------------------


$p3->idProduto = 3;
$p3->imagem = "https://www.drogariaminasbrasil.com.br/media/product/3e4/salgadinho-doritos-110g-queijo-nacho-128.jpg";
$p3->nomeProduto = 'Doritos';

$dp3->idProduto = 3;
$dp3->precoProduto = 6.2;
$dp3->marcaProduto = 'Pepsico';
$dp3->descricaoProduto = 'Esse produto é feito de massa de milho prensada em forma triangular. O tempero adicionado dá sensações diferentes ao paladar. Possui muito sódio e deve ser evitado, mesmo sendo bem gostoso.';


array_push($produtos, $p1);
array_push($produtos, $p2);
array_push($produtos, $p3);

array_push($descricoes, $dp1);
array_push($descricoes, $dp2);
array_push($descricoes, $dp3);


if (isset($_GET['todosProdutos'])){
	for ($i=0; $i < count($produtos) ; $i++) { 
		echo json_encode($produtos[$i]);
		echo "\n";
	}

}

if (isset($_GET['descricaoProduto'])){
	for ($i=0; $i < count($descricoes) ; $i++) {
		if($descricoes[$i]->idProduto == $_GET['descricaoProduto']){
			echo json_encode($descricoes[$i]);
		}
	}

}


if (isset($_GET['produto'])){
	for ($i=0; $i < count($produtos) ; $i++) { 
		if($descricoes[$i]->idProduto == $_GET['produto']){
			echo json_encode($produtos[$i]);
		}
	}
}


?>