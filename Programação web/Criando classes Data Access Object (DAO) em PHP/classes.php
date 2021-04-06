<?php

include_once 'dbconnect.php';

class Produto{
	public $idProduto;
	public $nome;
	public $descricao;
	public $imagem;
	public $preco;

	function __construct(){

	}


	public function salvar(){
		$query = "INSERT into produto(nome,descricao,imagem,preco) VALUES ('" . $this->nome . "', '" . $this->descricao . "', '" . $this->imagem . "', " . $this->preco .")";

		Connect::getConnection()->query($query);	
	}

	public function excluir($id){
		$queryDelete = 'DELETE FROM produto WHERE idProduto = ' . $id;
		Connect::getConnection()->query($queryDelete);	
	}

	public function atualizar(){
		$query = "UPDATE produto SET nome = '" . $this->nome . "', descricao = '" . $this->descricao . "', imagem = '" . $this->imagem . "', preco = " . $this->preco ." WHERE idProduto = " . $this->idProduto;
		Connect::getConnection()->query($query);

	}


	public function findAll(){
		$buscaTodos = Connect::getConnection()->query("Select * from produto");
		$result = array();
		while ($row = mysqli_fetch_row($buscaTodos)) {
			$novo = new Produto();
			$novo->idProduto = $row[0];
			$novo->nome = $row[1];
			$novo->descricao = $row[2];
			$novo->imagem = $row[3];
			$novo->preco = $row[4];
			array_push($result, $novo);
		}
		return $result;
	}

} 

?>