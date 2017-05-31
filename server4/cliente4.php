<?php
	//cliente
	
	//inclusao do arquivo NUSOAP
	require_once('lib/nusoap.php');
	
	//criacao de uma instancia do cliente
	$client = new nusoap_client('http://webservicesoap.azurewebsites.net/app4/server4.php');
	
	//chamada do metodo SOAP
	$result = $client->call('listaProdutos');
    echo " <p> Lsita de produtos <p>";
	
?>

<select name="produtos">
  <?php	
			
		echo "<option value=''>Selecione</option>";	
		
		//preencher o conteudo do select com dados vindo do banco mysql
		$top = sizeof($result) - 1;
        $bottom = 0;
        while($bottom <= $top)
        {
			echo '<option value='.$result[$bottom]['codigo'].'>'.$result[$bottom]['nome'].'</option>';
			$bottom++;
		}
  ?>
  
</select>