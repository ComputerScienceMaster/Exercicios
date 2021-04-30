<?php

$acompanhamentos = ['CSM fritas', 'CSM nuggs', 'CSM Fluri' ];
$acompanhamentosURL = [
	'https://villasembalagens.com.br/wp-content/uploads/2018/06/fritas.jpg', 
	'https://melepimenta.com/wp-content/uploads/2019/01/Nuggets-frango-caseiros-Baixa-5-1024x683.jpg' , 
	'https://www.saborama.com.br/wp-content/uploads/2017/10/economize-fazendo-sorvete.jpg'];



	$refrigerantes = ['Coca-Coca', 'Fantos', 'Guaraney'];
	$refrigerantesURL = ['https://static8.depositphotos.com/1020618/980/i/600/depositphotos_9805108-stock-photo-glass-of-cola.jpg',
	'https://image.freepik.com/fotos-gratis/copo-de-refrigerante-de-laranja-com-gelo-isolado-no-fundo-branco_55716-175.jpg', 
	'https://www.cini.com.br/wp-content/uploads/2018/11/Guaran%C3%A1-e-Abacaxi.png'];


	$lanches = ["BigLack", "CSM gostoso", 'CSM chicken'];
	$lanchesURL = ['https://d25dk4h1q4vl9b.cloudfront.net/media/images/menu-content/BR/sanduiches-de-carne/bigmac_v2.png',
	'https://d25dk4h1q4vl9b.cloudfront.net/media/images/menu-content/BR/sanduiches-de-carne/tasty_new.png', 
	'https://s2.glbimg.com/tSulmEejYpXitwIIFB2izDSchXM=/0x0:469x329/984x0/smart/filters:strip_icc()/s.glbimg.com/po/rc/media/2014/05/07/20_24_57_27_McFran_a_1.jpg'];



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