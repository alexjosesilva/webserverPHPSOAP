<?php
	//cliente
	
	//inclusao do arquivo NUSOAP
	require_once('lib/nusoap.php');
	
	//criacao de uma instancia do cliente
	$client = new nusoap_client('http://localhost/www/server2/server2.php');
			
	//chamada do metodo SOAP
	$result = $client->call('listaProdutos');
	
	//var_dump($result);
	
?>

<select>
  <?php
		
		
		//exibe o resultado
		$top = sizeof($result) - 1;
        $bottom = 0;
        while($bottom <= $top)
        {
			echo '<option value='.$result[$bottom]['codigo'].'>'.$result[$bottom]['nome'].'</option>';
			$bottom++;
		}
  ?>
  
</select>