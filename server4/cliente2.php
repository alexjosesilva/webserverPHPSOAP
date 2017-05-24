<?php
	//cliente
	
	//inclusao do arquivo NUSOAP
	require_once('lib/nusoap.php');
	
	//criacao de uma instancia do cliente
	$client = new nusoap_client('http://127.0.0.1/webservicephp/server2.php');
			
	//chamada do metodo SOAP
	$result = $client->call('listaProdutos');
	
	
?>

<select>
  <?php
	
		//exibe o resultado
		$top = sizeof($result) - 1;
        $bottom = 0;
        while($bottom <= $top)
        {
			echo '<option value='.$result[$bottom].'>'.$result[$bottom].'</option>';
			$bottom++;
		}
  ?>
  
</select>