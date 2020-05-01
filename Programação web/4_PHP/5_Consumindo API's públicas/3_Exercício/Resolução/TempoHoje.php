<!DOCTYPE html>
<html>
<head>
	<title>Tempo Hoje</title>
</head>



<body>
	<h1>Tempo hoje - sua previsão de tempo</h1>
	<form action="TempoHoje.php" method="GET">
		<input type="text" name="cidade" placeholder="Digite o nome da cidade que deseja consultar">
		<input type="text" name="rua" placeholder="Digite o nome da rua que deseja consultar">
		<input type="submit" value="consultar">
	</form>
	<br/>
	<br/>
	<br/>

	<?php
	if(isset($_GET['cidade']) && isset($_GET['rua'])){
		$cep = file_get_contents("https://viacep.com.br/ws/RS/" . $_GET['cidade'] . "/" . urlencode($_GET['rua']) . "/json/");
		$jsoncep = json_decode($cep,true);
		for ($i=0; $i < count($jsoncep); $i++) { 
			echo "<div> CEP: " . $jsoncep[$i]['cep'] . " Cidade: " . $jsoncep[$i]['logradouro'] . "</div>" ;
		}		
	}
	?>

</body>
</html>