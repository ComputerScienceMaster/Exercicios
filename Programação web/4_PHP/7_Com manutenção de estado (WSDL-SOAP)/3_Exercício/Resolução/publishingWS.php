<?php
require 'lib/nusoap.php';

// aquí nos simulamos um Banco de dados com apenas um ARRAY
function sum($number1, $number2){
	return $number1 + $number2;
}

function subtraction($number1, $number2){
	return $number1 - $number2;
}

$server = new nusoap_server(); // Instancia o NUSOAP

$server->configureWSDL("Calculadora","urn:calculadora"); // Configure WSDL file

$server->register(
	"sum", // name of function
	array("number1"=>"xsd:integer", "number2" => "xsd:integer"),  // inputs
	array("return"=>"xsd:integer")   // outputs
);

$server->service(file_get_contents("php://input"));

