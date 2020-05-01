<?php
	
	$content = file_get_contents('series.json');
	echo $content;
	
	// para transformar em um array use:
	//print_r (json_decode($content));

?>