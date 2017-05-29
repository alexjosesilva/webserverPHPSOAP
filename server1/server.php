<?php
	//server

	//inclusao do arquivo NUSOAP
	require_once('nusoap.php');
	
	//criacao de uma instanca do servidor
	$server = new soap_server;
	
	//registro do método
	$server->register('hello');
	
	
	function hello($name){
		
		$result = "Hello, " . $name;
		return $result;
		
		var_dump($result);
	}
	
	
	//requisição para uso do serviço
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ?
	$HTTP_RAW_POST_DATA : '';
	
	$server->service($HTTP_RAW_POST_DATA);
	var_dump($server);
	
?>