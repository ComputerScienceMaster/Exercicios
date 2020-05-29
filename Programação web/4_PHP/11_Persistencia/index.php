<?php
include_once 'dbconnect.php';

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
	
	$query = "INSERT into produto(nome,descricao,imagem,preco) VALUES ('" .$_GET['nome'] . "', '" .$_GET['descricao']. "', '" .$_GET['link']. "', " .$_GET['preco'].")";
	echo $query; 
	
	Connect::getConnection()->query($query);	
}

// aqui eu faço a deleção

if(isset($_GET['idParaDeletar'])){
	$queryDelete = 'DELETE FROM produto WHERE idProduto = ' . $_GET['idParaDeletar'];
	Connect::getConnection()->query($queryDelete);	
}

// query do banco
$produtos = Connect::getConnection()->query("Select * from produto");



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
		while ($row = mysqli_fetch_row($produtos)) {
			echo "<tr>";
			echo '<td> <img src="' . $row[3] . '" width="100" heigth="100"></td>';
			echo '<td>' . $row[1] . '</td>';
			echo '<td>' . $row[2] . '</td>';
			echo '<td>' . $row[4] . '</td>';
			echo '<td> <input type="hidden" name="idParaDeletar" value="'. $row[0]. '"> <input type="submit" value="Excluir"> </td>';
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
	
	$query = "UPDATE produto SET nome = '" .$_GET['nome'] . "', descricao = '" .$_GET['descricao']. "', imagem = '" .$_GET['link']. "', preco = " .$_GET['preco']." WHERE idProduto = " . $_GET['idProduto'];
	echo $query; 
	
	Connect::getConnection()->query($query);	
}


?>