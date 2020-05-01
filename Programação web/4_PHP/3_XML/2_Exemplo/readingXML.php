<?php 

$xml = simplexml_load_file("xmlSample.xml") or die("Error: Cannot create object");
print_r($xml);

?>