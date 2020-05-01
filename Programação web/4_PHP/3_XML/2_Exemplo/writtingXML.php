<?php

$test_array = array (
	'bla' => 'blub',
	'foo' => 'bar',
	'another_array' => array (
		'stack' => 'overflow',
	),
);
$xml = new SimpleXMLElement('<root/>');
array_walk_recursive($test_array, array ($xml, 'addChild'));
echo $xml->asXML();

?>