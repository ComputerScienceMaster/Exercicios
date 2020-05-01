<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 01 - Requisição Ajax com Jquery</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<div>Usando o $.ajax</div>
	<div id="conteudoAjax"></div>

	<br>
	<br>

	<div>Usando o $.get</div>
	<div id="conteudoGet"></div>

	<br>
	<br>

	<div>Usando o $.post</div>
	<div id="conteudoPost"></div>

	<script type="text/javascript">
		$.ajax({url: "demo_ajax.php", success: function(result){
			$("#conteudoAjax").html(result);
		}});

		$.get( "demo_ajax.php", function( data ) {
			$( "#conteudoGet" ).html( data );
		});

		$.post( "demo_ajax.php", { nome: "john" }, function( data ) {
			$( "#conteudoPost" ).html( data );
		});
	</script>
</body>
</html>