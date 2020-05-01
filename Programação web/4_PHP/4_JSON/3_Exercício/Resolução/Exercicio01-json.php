<?php
class Aluno{
	public $id;
	public $nomeCompleto;
	public $dataDeNascimento;
	public $telefone;
	public $email;
}
	
	// verifica se o nome foi setado
if(isset($_GET['nome']) && isset($_GET['data']) && isset($_GET['telefone']) && isset($_GET['email'])){

	$c1 = new Aluno();
	$c1->id = 1<?php
class Aluno{
	public $id;
	public $nomeCompleto;
	public $dataDeNascimento;
	public $telefone;
	public $email;
}

	// verifica se o nome foi setado
if(isset($_GET['nome']) && isset($_GET['data']) && isset($_GET['telefone']) && isset($_GET['email'])){

	$c1 = new Aluno();
	$c1->id = 1;
	$c1->nomeCompleto = $_GET['nome'];
	$c1->dataDeNascimento = $_GET['data'];
	$c1->telefone = $_GET['telefone'];
	$c1->email = $_GET['email'];

	echo json_encode($c1);
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 01 - correção</title>
</head>
<body>
	<form method="GET" action="Exercicio01-correcao.php">
		<input type="text" name="nome">
		<input type="text" name="data">
		<input type="text" name="telefone">
		<input type="text" name="email">
		<input type="submit" value="submeter">

	</form>
</body>
</html>;
	$c1->nomeCompleto = $_GET['nome'];
	$c1->dataDeNascimento = $_GET['data'];
	$c1->telefone = $_GET['telefone'];
	$c1->email = $_GET['email'];

	echo json_encode($c1);
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 01 - correção</title>
</head>
<body>
	<form method="GET" action="Exercicio01-correcao.php">
		<input type="text" name="nome">
		<input type="text" name="data">
		<input type="text" name="telefone">
		<input type="text" name="email">
		<input type="submit" value="submeter">

	</form>
</body>
</html>