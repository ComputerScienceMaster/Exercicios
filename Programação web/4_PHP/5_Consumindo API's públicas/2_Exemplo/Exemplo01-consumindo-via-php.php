<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 01 - Consumindo via php</title>
</head>
<body>
	<?php
		$hg = file_get_contents("https://api.hgbrasil.com/weather?woeid=452041");
		echo $hg;

	?>
</body>
</html>