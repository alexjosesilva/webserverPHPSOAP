<?php
	//server
	//inclusao do arquivo NUSOAP
	require_once('lib/nusoap.php');
	
	//criacao de uma instanca do servidor
	$server = new soap_server;
	
	//registro do método
	$server->register('listaGerarMatricula');
	
	
	function listaGerarMatricula(){
		
		$empresa = array(
			'setor'=> $setor 		= array("diretoria","adminstracao","finaceiro","rh","producao"),
			'cargo'=>$cargo 		= array("ceo","contador","secretaria","engenheiro software","analista de sistemas","desenvolvedor","analista de banco","analista de infra", "redes","suporte"),
			'unidade'=>$unidade	= array("recife","caruaru","vitoria","jaboatao","olinda","garanhuns")
		);

		return $empresa;
	}
	
	
	//requisição para uso do serviço
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ?
	$HTTP_RAW_POST_DATA : '';
	
	$server->service($HTTP_RAW_POST_DATA);
	
?>
