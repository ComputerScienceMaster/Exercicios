<?php

class Cliente{
	public $nome;
	public $email;
	public $telefone;
	public $cpf;
	public $rg;

	function __construct($nome, $email, $telefone, $cpf, $rg) {
		$this->nome = $nome;
		$this->email = $email;
		$this->telefone = $telefone;
		$this->cpf = $cpf;
		$this->rg = $rg;
	}
}

$clientes = array();

$c1 = new Cliente("Lídia maria", "Lidia@gmail.com", "31851835", "13513581358","313591359");
$c2 = new Cliente("Fábio de souza", "fabio@gmail.com", "912291", "13953939","41401041");
$c3 = new Cliente("Márcio luiz", "marcio@gmail.com", "359111", "50310539","59349402");
$c4 = new Cliente("Gustavo carneiro", "gustavo@gmail.com", "5193519359", "3593100491","103501350");

array_push($clientes, $c1);
array_push($clientes, $c2);
array_push($clientes, $c3);
array_push($clientes, $c4);


if(isset($_GET['show']) && $_GET['show'] == "all"){
	for ($i=0; $i < count($clientes) ; $i++) { 
		echo $clientes[$i]->nome . "," . $clientes[$i]->email . "," . $clientes[$i]->telefone . "," . $clientes[$i]->cpf . "," . $clientes[$i]->rg . ";" ;
	}

}


if(isset($_GET['cpf'])){
	for ($i=0; $i < count($clientes) ; $i++) { 
		if($clientes[$i]->cpf == $_GET['cpf'])
			echo $clientes[$i]->nome . "," . $clientes[$i]->email . "," . $clientes[$i]->telefone . "," . $clientes[$i]->cpf . "," . $clientes[$i]->rg . ";" ;
	}
}



if(isset($_GET['search'])){
	for ($i=0; $i < count($clientes) ; $i++) { 
		if(strpos($clientes[$i]->nome, $_GET['search']) !== false)
			echo $clientes[$i]->nome . "," . $clientes[$i]->email . "," . $clientes[$i]->telefone . "," . $clientes[$i]->cpf . "," . $clientes[$i]->rg . ";" ;
	}
}


?>