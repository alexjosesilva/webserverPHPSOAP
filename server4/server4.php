<?php
	//server
	//inclusao do arquivo NUSOAP
	require_once('lib/nusoap.php');
	require_once('conectar.php');
	
	
	
	//criacao de uma instanca do servidor
	$server = new soap_server;
	
	//registro do método
	$server->register('listaProdutos');
	
	
	
	function listaProdutos(){
		
		$con = conectar();
		$sql = "select * from curso";
		$cursos = mysql_query($sql,$con);
		$produtos = array();
		
		$linha = mysql_fetch_assoc($cursos);
		$total = mysql_num_rows($cursos);
		$i =0;
		if($total > 0) {
			do {
				//echo "<br>".$linha['codigo']." ".$linha['nome']."<br>";
				 $produtos[$i] = $linha;
				 $i++;
			}while($linha = mysql_fetch_assoc($cursos));
		}
		return $produtos;
	}
	
	
	//requisição para uso do serviço
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ?
	$HTTP_RAW_POST_DATA : '';
	
	$server->service($HTTP_RAW_POST_DATA);
	
?>
