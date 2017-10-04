<?php
	//cliente
	
	//inclusao do arquivo NUSOAP
	require_once('lib/nusoap.php');
	
	//criacao de uma instancia do cliente
	$client = new nusoap_client('http://localhost/www/webserverPHPSOAP/server6/server6.php');
			
	//chamada do metodo SOAP
	$result = $client->call('listaGerarMatricula');
	print_r($result);

?>

<br/>
<span>Setor</span>
<select name="setor">
  <?php
	
		//setor
		$top = sizeof($result['setor']) - 1;

        $bottom = 0;
        while($bottom <= $top)
        {
			echo '<option value='.$result['setor'][$bottom].'>'.$result['setor'][$bottom].'</option>';
			$bottom++;
		}
  ?>
  
</select>

<br/>
<span>Cargo</span>
<select name="cargo">
  <?php
	
		//cargo
		$top = sizeof($result['cargo']) - 1;
        $bottom = 0;
        while($bottom <= $top)
        {
			echo '<option value='.$result['cargo'][$bottom].'>'.$result['cargo'][$bottom].'</option>';
			$bottom++;
		}
  ?>
  
</select>

<br/>
<span>Unidades</span>
<select name="unidades">
  <?php
	
		//unidades
		$top = sizeof($result['unidade']) - 1;
        $bottom = 0;
        while($bottom <= $top)
        {
			echo '<option value='.$result['unidade'][$bottom].'>'.$result['unidade'][$bottom].'</option>';
			$bottom++;
		}
  ?>
  
</select>

