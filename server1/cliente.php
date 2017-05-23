<?php
	//cliente
	
	//inclusao do arquivo NUSOAP
	require_once('lib/nusoap.php');
	
	//criacao de uma instancia do cliente
	$client = new nusoap_client('http://127.0.0.1/webservicephp/server1.php');
			
	//chamada do metodo SOAP
	$result = $client->call('hello',array('name' => 'brasil'));
	
		
	//exibe o resultado
	print_r($result);
	
?>
