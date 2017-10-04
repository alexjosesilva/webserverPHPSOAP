<?php
	//cliente
	
	//inclusao do arquivo NUSOAP
	require_once('lib/nusoap.php');
	
	//criacao de uma instancia do cliente
	//$client = new nusoap_client('http://webservicesoap.azurewebsites.net/app4/server4.php');
	$client = new nusoap_client('http://localhost/www/server4/server.php');
	
	//chamada do metodo SOAP
	$result = $client->call('listaProdutos');
    echo " <p> Lsita de produtos <p>";
	
?>


  <?php	
			
	<?php foreach($result as $row) {?>
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['address'];?></td>
				<td>
					<a href="update.php?id=<?php echo $row['id'];?>">Edit</a> | 
					<a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?');">Delete</a>
				</td>
			</tr>
			<?php } ?>
  ?>
  
