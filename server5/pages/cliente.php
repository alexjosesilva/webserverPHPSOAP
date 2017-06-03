<?php
	//inclusao do arquivo NUSOAP
	require_once('../lib/nusoap.php');
	
	//criacao de uma instancia do cliente
	$client = new nusoap_client('http://127.0.0.1/edsa-webserverPHPSOAP/server5/server.php');
	
?>