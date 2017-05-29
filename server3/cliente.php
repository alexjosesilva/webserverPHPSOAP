<?php
	echo "WebSErvicePHP: Lista";
	
	include ("lib/nusoap.php");
	
	$client = new nusoap_client("http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx?WSDL",true);
	
	$parametros = array(' nCdEmpresa'=>'',
						'sDsSenha'=>'',
						'nCdServico'=>'41106',
						'sCepOrigem'=>'99010150',
						'sCepDestino'=>'78896000',
						'nVlPeso'=>'1',
						'nCdFormato'=>'1',
						'nVlAltura'=>'20',
						'nVlLargura'=>'30',
						'nVlDiametro'=>'40',
						'nVlComprimento'=>'20',
						'sCdMaoPropria'=>'S',
						'nVlValorDeclarado'=>'200',
						'sCdAvisoRecebimento'=>'S'
					);
	
	$resultado = $client->call('CalcPrecoPrazo',$parametros);
	print_r($resultado);


   echo "
		<br> Codigo = ".$resultado[Codigo]."
		<br> Valor = ".$resultado[Valor] ."
		<br> PrazoEntrega = ".$resultado[PrazoEntrega] ."
		<br> ValorMaoPropria = ".$resultado[ValorMaoPropria] ."
		<br> ValorAvisoRecebimento = ".$resultado[ValorAvisoRecebimento] ."
		<br> ValorValorDeclarado =".$resultado[ValorValorDeclarado]."
		<br> EntregaDomiciliar = ".$resultado[EntregaDomiciliar]."
		<br> EntregaSabado = ".$resultado[EntregaSabado]."
		<br> ValorSemAdicionais = ".$resultado[ValorSemAdicionais];	
?>

