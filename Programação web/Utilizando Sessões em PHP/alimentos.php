<?php
require_once 'produtos.php';
require_once 'classes.php';
session_start();

$ps = getProdutos();

if(isset($_GET['productToAdd'])){
	$found = procuraProduto($ps,$_GET['productToAdd']);
	if(isset($_SESSION['carrinho'])){
		$carrinho = unserialize($_SESSION['carrinho']);
		$prodNoCarrinho = array();
		if($carrinho->produtos != null ){
			$prodNoCarrinho = $carrinho->produtos;	
		}
		array_push($prodNoCarrinho, $found);
		$carrinho->produtos = $prodNoCarrinho;
		$_SESSION['carrinho'] = serialize($carrinho);
	}else{
		$c = new Carrinho();
		$c->idCarrinho = 1;
		$arrayToAppend = array();
		array_push($arrayToAppend, $found);
		$c->produtos = $arrayToAppend;

		$c->precoTotal = $found->preco;
		$_SESSION['carrinho'] = serialize($c);
	}

}

if(isset($_GET['acao']) && $_GET['acao'] == "LimparCarrinho"){
	unset($_SESSION['carrinho']);
}


?>


<h1>E-commerce de alimentos</h1>

<div>
	<table border="1">
		<tr>
			<td>Imagem</td>
			<td>ID</td>
			<td>nome</td>
			<td>descrição</td>
			<td>preço</td>

			<td>Ações</td>
		</tr>

		<?php
		foreach ($ps as $p) {
			echo '<tr>';
			echo '<td> <img src="'. $p->imagem . '" width="50" heigth="50"></td>';
			echo '<td>' .$p->idProduto . '</td>';
			echo '<td>' .$p->nome. '</td>';
			echo '<td>' .$p->descricao. '</td>';
			echo '<td>' .$p->preco. '</td>';
			echo "<form>";
			echo '<td> <input type="hidden" name="productToAdd" value="'. $p->idProduto .'"/> <input type="submit" value="Adicionar Ao carrinho"/></td>';
			echo "</form>";

			echo '</tr>';
		}
		?>

	</table>

	<h2>Carrinho de compras</h2>

	<div>
		<table border="1">
			<tr>
				<td>Imagem</td>
				<td>Nome do Produto</td>
				<td>preço</td>
			</tr>

			<?php
			if(isset($_SESSION['carrinho'])){

				$carrinho = unserialize($_SESSION['carrinho']);
				$carrinho->calcularTotal();
				foreach ( $carrinho->produtos as $p ){
					echo '<tr>';
					echo '<td> <img src="'. $p->imagem . '" width="50" heigth="50"></td>';
					echo '<td>' .$p->nome. '</td>';
					echo '<td>' .$p->preco. '</td>';
					echo '</tr>';
				}
				echo "<tr><b>Total: " . $carrinho->precoTotal . " </b></tr>";
			}
			?>

		</table>
		<form>
			<input type="hidden" name="acao" value="LimparCarrinho">
			<input type="submit" value="Limpar Carrinho">
		</form>

	</div>

</div>