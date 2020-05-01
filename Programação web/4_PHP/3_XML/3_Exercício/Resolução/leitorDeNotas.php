<?php 

$notas = array();

for ($i=1; $i <= 5; $i++) { 
	
	$xml = simplexml_load_file("nota0" . $i . ".xml") or die("Error: Cannot create object");
	array_push($notas, $xml);
}

$acumulador = 0;


for ($i=0; $i < 5 ; $i++) { 
	$acumulador = $acumulador + intval($notas[$i]->valor) * intval($notas[$i]->valor);
}

echo $acumulador;

?>