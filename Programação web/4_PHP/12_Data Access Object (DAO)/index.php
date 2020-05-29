<?php
include_once 'classes.php';
?>


<h1>Formulario de Adicionar</h1>


<form method="GET">
	<input type="hidden" name="action" value="insert">
	<input type="text" name="nome" placeholder="Digite o seu nome">
	<input type="text" name="descricao" placeholder="Digite a descrição do produto">
	<input type="text" name="link" placeholder="Link da imagem">
	<input type="text" name="preco" placeholder="Digite o preço">

	<input type="submit" value="Submeter">
</form>



<?php

// aqui eu faço a inserção

if(isset($_GET['action']) && $_GET['action'] == 'insert'){
	
	$paraAdicionar = new Produto();
	$paraAdicionar->idProduto = 0;
	$paraAdicionar->nome =  $_GET['nome'];
	$paraAdicionar->descricao = $_GET['descricao'];
	$paraAdicionar->imagem = $_GET['link'];
	$paraAdicionar->preco = $_GET['preco'];
	$paraAdicionar->salvar();

}

// query do banco
$busca = new Produto();

$ps = $busca->findAll(); 


if(isset($_GET['idParaDeletar'])){

	$paraDeletar = new Produto();
	$paraDeletar->excluir($_GET['idParaDeletar']);
	
}

?>


<!-- Tornar essa tabela dinamica -->


<h1>Produtos adicionados</h1>

<form>
	<table border="1">
		<tr>
			<td>imagem</td>
			<td>nome</td>
			<td>descricao</td>
			<td>preco</td>
			<td>Ações</td>
		</tr>


		<?php

		foreach ($ps as $p) {
		 	# code...
		  
			echo "<tr>";
			echo '<td> <img src="' . $p->imagem . '" width="100" heigth="100"></td>';
			echo '<td>' . $p->nome . '</td>';
			echo '<td>' . $p->descricao . '</td>';
			echo '<td>' . $p->preco . '</td>';
			echo '<td> <input type="hidden" name="idParaDeletar" value="'. $p->idProduto . '"> <input type="submit" value="Excluir"> </td>';
			echo '</tr>';
		}
		?>

	</table>
</form>


<h1>Formulario de Editar</h1>


<form method="GET">
	<input type="hidden" name="action" value="update">
	<input type="text" name="idProduto" placeholder="Digite o id do Produto">
	<input type="text" name="nome" placeholder="Digite o seu nome">
	<input type="text" name="descricao" placeholder="Digite a descrição do produto">
	<input type="text" name="link" placeholder="Link da imagem">
	<input type="text" name="preco" placeholder="Digite o preço">

	<input type="submit" value="Submeter">


</form>


<?php

if(isset($_GET['action']) && $_GET['action'] == 'update'){
	
	$paraAtualizar = new Produto();

	$paraAtualizar->idProduto = $_GET['idProduto'];
	$paraAtualizar->nome =  $_GET['nome'];
	$paraAtualizar->descricao = $_GET['descricao'];
	$paraAtualizar->imagem = $_GET['link'];
	$paraAtualizar->preco = $_GET['preco'];
	$paraAtualizar->atualizar();
}


?>