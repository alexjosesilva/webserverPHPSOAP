<?php
	//inclusao do arquivo NUSOAP
	require_once('../lib/nusoap.php');
	
	//criacao de uma instancia do cliente
	$client = new nusoap_client('http://webservicesoap.azurewebsites.net/app5/server5.php');
?>