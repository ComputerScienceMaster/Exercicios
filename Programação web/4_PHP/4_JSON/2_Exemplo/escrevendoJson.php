<?php
	
	class Carro{
		public $id;
		public $marca;
		public $preco;
	}

	$c1 = new Carro();
	$c1->id = 1;
	$c1->marca = "hunday";
	$c1->preco = 40.0;

	echo json_encode($c1);

?>