<?php
	//server
	//inclusao do arquivo NUSOAP
	require_once('lib/nusoap.php');
	
	//criacao de uma instanca do servidor
	$server = new soap_server;
	
	//registro do método
	$server->register('listaProdutos');
	
	
	function listaProdutos(){
		
		$produtos = array("volvo","saab","mercedes","audi","fiat","bmw");		
		return $produtos;
	}
	
	
	//requisição para uso do serviço
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ?
	$HTTP_RAW_POST_DATA : '';
	
	$server->service($HTTP_RAW_POST_DATA);
	
?>
