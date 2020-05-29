<?php
	require_once 'classes.php';

	function getProdutos(){
		$prods = array();

		$p1 = new Produto();
		$p1->idProduto = 1;
		$p1->nome = "banana";
		$p1->descricao = "Banana selecionada pelos melhores coletores, nanica, maçã e várias outras";
		$p1->imagem = "https://www.paodeacucar.com/img/uploads/1/7/607007.png?type=product";
		$p1->preco = 4.0;

		$p2 = new Produto();
		$p2->idProduto = 2;
		$p2->nome = "Uva";
		$p2->descricao = "Uva das mais roxas do mundo, vinda diretamente de portugal";
		$p2->imagem = "https://www.fabricadeperfumes.com.br/media/catalog/product/cache/1/image/800x/9df78eab33525d08d6e5fb8d27136e95/i/m/imagem-de-frutas-uva-roxa-2-png.png";
		$p2->preco = 7.0;


		$p3 = new Produto();
		$p3->idProduto = 3;
		$p3->nome = "Leite condensado";
		$p3->descricao = "Leite condensado moça, para fazer doces e brigadeiros";
		$p3->imagem = "https://www.nestle.com.br/images/default-source/produtos/moca-leite-condensado16b97981b2fd4b7d864c77433d44f068.png?sfvrsn=7f7adec9_4";
		$p3->preco = 3.5;

		$p4 = new Produto();
		$p4->idProduto = 4;
		$p4->nome = "Leite em pó";
		$p4->descricao = "Banana selecionada pelos melhores coletores, nanica, maçã e várias outras";
		$p4->imagem = "https://www.paodeacucar.com/img/uploads/1/7/607007.png?type=product";
		$p4->preco = 4.0;


		$p5 = new Produto();

		$p5->idProduto = 5;
		$p5->nome = "Açai";
		$p5->descricao = "Açai da terra processado pelos melhores moínhos do amazonas";
		$p5->imagem = "https://i.pinimg.com/originals/c2/43/cb/c243cb9ca58376a0d4a4eca5764c1e12.png";
		$p5->preco = 11.0;

		array_push($prods, $p1);
		array_push($prods, $p2);
		array_push($prods, $p3);
		array_push($prods, $p4);
		array_push($prods, $p5);

		return $prods;

	}

	function procuraProduto($produtos,$toSearch){
		var_dump($toSearch);
		foreach ($produtos as $p) {
			if($p->idProduto == intval($toSearch)){
				return $p;
			}
		}
	}
		

?>