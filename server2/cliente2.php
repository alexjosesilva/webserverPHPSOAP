<?php

$client = new SoapClient(null, array(
		'location' 	=> 'http://127.0.0.1:8080/edsa-webserverPHP/server2/server.php',
		'uri' 		=> 'http://127.0.0.1:8080/edsa-webserverPHP/server2',
		'trace' 	=> 1
     ));
	 
$result = $client->hello('Mauricio salfhsdkjfsdkj');

if(is_soap_fault($result)){
	trigger_error("SOAP Fault: (faultcode: 
	{$result->faultcode},faultstring: {$result->faultstring})", E_ERROR);
}else{
	echo "Resultado Encontrado: <br><br>";
	print_r($result);
}

?>