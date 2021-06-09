<?php

$acompanhamentos = ['CSM fritas', 'CSM nuggs', 'CSM Fluri' ];
$acompanhamentosURL = [
	'<place your images here>', '<place your images here>', '<place your images here>'];



	$refrigerantes = ['Coca-Coca', 'Fantos', 'Guaraney'];
	$refrigerantesURL = ['<place your images here>', '<place your images here>', '<place your images here>'];


	$lanches = ["BigLack", "CSM gostoso", 'CSM chicken'];
	$lanchesURL = ['<place your images here>', '<place your images here>', '<place your images here>'];



	?>


	<!DOCTYPE html>
	<html style="background-color: #efefef;">
	<head>
		<title>Agenda de tarefas</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	</head>

	<body class="container" style="background-color: red">
		<div class="row">
			<h1 class='col-sm-8' style="text-align: center; font-family: impact; padding: 80px; color: yellow">CSM Cardápio</h1>
			<img class="col-sm-3" src = 'images/logo.png' width="150" style="margin: 20px;" />

		</div>

		<div style=" background-color: #df0000; padding:20px; "  >
			<h2 style="color:yellow">Lanches</h2>
			<div class="row">
				<?php


				for ($i = 0 ; $i < 3 ; $i++ ) {
					echo '<div class="col-md-4">';
					echo '<div class="card " style="width: 18rem;">';
					echo '<img src="'. $lanchesURL[$i] .'" height="200" class="card-img-top" >';
					echo '<div class="card-body">';
					echo '<h5 class="card-title">' . $lanches[$i] . '</h5>';
					echo '<a href="#" class="btn btn-primary">Comprar</a>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
				}
				?>

			</div>
		</div>

		<div style=" background-color: #df0000; padding:20px; "  >
			<h2 style="color:yellow">Acompanhamentos</h2>
			<div class="row">
				<?php


				for ($i = 0 ; $i < 3 ; $i++ ) {
					echo '<div class="col-md-4">';
					echo '<div class="card " style="width: 18rem;">';
					echo '<img src="'. $acompanhamentosURL[$i] .'" width="200" class="card-img-top" >';
					echo '<div class="card-body">';
					echo '<h5 class="card-title">' . $acompanhamentos[$i] . '</h5>';
					echo '<a href="#" class="btn btn-primary">Comprar</a>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
				}
				?>

			</div>
		</div>

		<div style=" background-color: #df0000; padding:20px; "  >
			<h2 style="color:yellow">Refrigerantes</h2>
			<div class="row">
				<?php


				for ($i = 0 ; $i < 3 ; $i++ ) {
					echo '<div class="col-md-4">';
					echo '<div class="card " style="width: 18rem;">';
					echo '<img src="'. $refrigerantesURL[$i] .'" width="200" class="card-img-top" >';
					echo '<div class="card-body">';
					echo '<h5 class="card-title">' . $refrigerantes[$i] . '</h5>';
					echo '<a href="#" class="btn btn-primary">Comprar</a>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
				}
				?>

			</div>
		</div>

	</div>

</body>
</html>