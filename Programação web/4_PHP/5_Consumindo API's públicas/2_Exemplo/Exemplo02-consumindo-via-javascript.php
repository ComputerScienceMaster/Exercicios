<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 02 - consumindo via Javascript</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>


<body>

	<div id="resultado"></div>
	<script type="text/javascript">
		$.get( "https://viacep.com.br/ws/13560530/json/", function( data ) {
			console.log(data);
			$("#resultado").append(JSON.stringify(data));
			
		});

	</script>
</body>
</html>