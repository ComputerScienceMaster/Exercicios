<?php
require 'lib/nusoap.php';

$client = new nusoap_client("http://localhost/public/publishingWS.php?wsdl"); // Create a instance for nusoap client

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cliente de Web service usando SOAP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <h2>Cliente de Web service usando SOAP</h2>
    <form class="form-inline" action="" method="POST">
      <div class="form-group">
        <label for="n1">number 1</label>
        <input type="text" name="n1" class="form-control"  placeholder="Numero 2" required/>
        <label for="n2">number 2</label>
        <input type="text" name="n2" class="form-control"  placeholder="Numero 1" required/>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Submeter</button>
    </form>
    <p>&nbsp;</p>
    <h3>
      <?php
      if(isset($_POST['submit']))
      {
        $number1 = $_POST['n1'];
        $number2 = $_POST['n2'];

        $response = $client->call('sum',array("number1"=>$number1, "number2"=> $number2));

        if(empty($response))
         echo "O preço não está disponível - Verifique se você digitou o nome correto";
       else
         echo 'Soma: ' . $response;
     }
     ?>
   </h3>
 </div>
</body>
</html>