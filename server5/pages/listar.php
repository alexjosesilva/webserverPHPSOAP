<?php
	//cliente
	include "cliente.php";		
	
	//chamada do metodo SOAP
	$result = $client->call('listaAlunos');
	//var_dump($result);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data List</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">
		<a href="criar.php">Criar Novo Usuário</a>
		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Address</td>
				<td>Action</td>
			</tr>
			<?php foreach($result as $row) {?>
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['address'];?></td>
				<td>
					<a href="editar.php?id=<?php echo $row['id'];?>">Edit</a> | 
					<a href="deletar.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?');">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<a href="http://webservicesoap.azurewebsites.net/app5">Back</a>
	</div>
</body>
</html>
