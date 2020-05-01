<?php
require 'lib/nusoap.php';

// aquí nos simulamos um Banco de dados com apenas um ARRAY
function get_price($name){
	$products = [
		"book"=>20,
		"pen"=>10,
		"pencil"=>5
	];
	
	foreach($products as $product=>$price){
		if($product==$name){
			return $price;
			break;
		}
	}
}

$server = new nusoap_server(); // Instancia o NUSOAP

$server->configureWSDL("Exemplo de SOAP","urn:exemplosoap"); // Configure WSDL file

$server->register(
	"get_price", // name of function
	array("name"=>"xsd:string"),  // inputs
	array("return"=>"xsd:integer")   // outputs
);

$server->service(file_get_contents("php://input"));

