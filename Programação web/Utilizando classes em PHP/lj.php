<?php


class Item{
	public $idItem;
	public $nome;
	public $marca;
	public $tipo;
	public $quantidade;
	public $preco;

}

class Pedido{
	public $idPedido;
	public $totalPedido;
	public $items;

}

$it = new Item();

if(isset($_POST['action']) && $_POST['action'] == 'cadastrar'){
	$it->idItem = $_POST['idItem'];
	$it->nome = $_POST['nome'];
	$it->marca = $_POST['marca'];
	$it->tipo = $_POST['tipo'];
	$it->quantidade = intval($_POST['quantidade']);
	$it->preco = doubleval($_POST['preco']);


}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Loja CSM</title>
</head>
<body>
	<h1>Bem vindo a nossa loja!</h1>

	<form action="lj.php" method="POST">
		<input style="width: 300px;" type="hidden" name="action" value="cadastrar">
		<br/>
		<input style="width: 300px;" type="text" placeholder="Digite o id do Item" name="idItem">
		<br/>
		<input style="width: 300px;" type="text" placeholder="Digite a nome do item" name="nome">
		<br/>
		<input style="width: 300px;" type="text" placeholder="Digite a marca do item" name="marca">
		<br/>
		<input style="width: 300px;" type="text" placeholder="Digite o tipo do item (Exemplo: salgado, bebida...)" name="tipo">
		<br/>
		<input style="width: 300px;" type="number" placeholder="Digite a quantidade desejada" name="quantidade">
		<br/>
		<input style="width: 300px;" type="text" placeholder="Digite qual será o preço de venda" name="preco">
		<br/><br/>
		<input type="submit" value="Cadastrar Produto">
	</form>


	<h2>Item cadastrado</h2>
	<ul>

		<?php if(!is_null($it->idItem)){ ?>

			<li> IdItem: <?=$it->idItem?></li>
			<li> nome: <?=$it->nome?></li>
			<li> marca: <?=$it->marca?></li>
			<li> tipo: <?=$it->tipo?></li>
			<li> quantidade: <?=$it->quantidade?></li>
			<li> preco: <?=$it->preco?></li>

		<?php } ?>

	</ul>
</body>



</html>