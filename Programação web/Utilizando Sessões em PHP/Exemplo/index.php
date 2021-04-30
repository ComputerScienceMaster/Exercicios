<?php

session_start();

if (!isset($_SESSION['tarefas'])){
	$_SESSION['tarefas'] = array();
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Agenda de tarefas</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body class="container">
	<div>
		<h1 class='jumbotron alert-dark' style="text-align: center; font-family: impact">Agendador de tarefas</h1>
	</div>

	<div style="background-color: #eee; padding:30px" >
		<?php

		if (isset($_GET['tarefa'])){
			array_push($_SESSION['tarefas'], $_GET['tarefa']);
		}
		?>
		<h2>Nova tarefa</h2>
		<form>
			<div class='form-group'>
				<input type="text"  class="form-control" name="tarefa" placeholder="Digite um nome para a tarefa">
			</div>
			<input type="submit" value="Cadastrar tarefa" class='btn btn-primary'>
		</form>
		

	</div>

	<div style="padding:40px; background-color: #efefef; margin-top: 20px">
		<h2>Tarefas agendadas</h2>	
		<ul>
			<?php

			foreach ($_SESSION['tarefas'] as $l){
				echo '<li>' . $l . '</li>';
			}

			?>
		</ul>
	</div>

</body>
</html>