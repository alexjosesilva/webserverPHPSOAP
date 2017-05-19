<?php
	//cliente
	
	//inclusao do arquivo NUSOAP
	require_once('lib/nusoap.php');
	
	//criacao de uma instancia do cliente
	$client = new nusoap_client('http://127.0.0.1:8080/edsa-webserverPHP/server.php');
			
	//chamada do metodo SOAP
	$result = $client->call('hello',array('name' => 'Pingu'));
	var_dump($result);
		
	//exibe o resultado
	print_r($result);
	
?>