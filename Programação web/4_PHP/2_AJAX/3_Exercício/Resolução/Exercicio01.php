<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 01</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<h1 class="jumbotron alert-warning mx-auto">Produtos</h1>

	<div id="produtos" class="row"></div>


	<?php
	if(isset($_POST['descricaoProduto'])){
		echo "<div class='jumbotron alert-success' id='descricaoProduto'><h2>Descrição do produto</h2></div>";
		echo "<input type='hidden' value ='" . $_POST['descricaoProduto'] . "' id='idProdutoSelecionado'/>";		
	}

	?>
	<script type="text/javascript">
		
		$.get( "servico.php?todosProdutos=1", function( data ) {

			var strLines = data.split("\n");

			for (var i in strLines) {
				var obj = JSON.parse(strLines[i]);
				$("#produtos").append("<form class='card col-md-2' method='POST' action='Exercicio01.php'><input type='hidden' name='descricaoProduto' value='" + obj['idProduto'] + "'/> <img width='300' height='300' src='" +obj['imagem'] + "'/> <input class='btn btn-primary' style='margin:20px' type='submit' value='ver descrição'></form>");
			}
		});

		if($("#descricaoProduto").length){
			$.get( "servico.php?descricaoProduto=" + $('#idProdutoSelecionado').val(), function( data ) {
				var strLines = data.split("\n");

				for (var i in strLines) {
					var obj = JSON.parse(strLines[i]);
					$("#descricaoProduto").append("<div><div>Preço: " + obj['precoProduto'] + " </div> <div>Marca:" + obj['marcaProduto'] + " </div> <div>Descrição:" + obj['descricaoProduto'] + " </div></div>");
				}
			});
		}


	</script>
</body>
</html>