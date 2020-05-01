<?php
	class Pessoa{
		public $id;
		public $nome;
	}

	$pessoas = array();

	$p1 = new Pessoa();
	$p1->id = 10;
	$p1->nome = "Janice";


	$p2 = new Pessoa();
	$p2->id = 20;
	$p2->nome = "Letícia";

	array_push($pessoas, $p1);
	array_push($pessoas, $p2);

	for ($i=0; $i < count($pessoas); $i++) { 
		echo $pessoas[$i]->id . "," . $pessoas[$i]->nome . ";" ;
	}
?>