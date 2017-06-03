<?php
//cliente
include "cliente.php";	
$message = ""; // initial message 

if( isset($_POST['submit_data']) ){

	// Gets the data from post
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];

	//chamada do metodo SOAP
	$result = $client->call('inserirAluno',array($name, $email, $address));
	
	
	if( $result ){
		$message = "Data is inserted successfully.";
	}else{
		$message = "Sorry, Data is not inserted.";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Data</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- showing the message here-->
		<div><?php echo $message;?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<form action="criar.php" method="post">
			<tr>
				<td>Name:</td>
				<td><input name="name" type="text"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input name="email" type="text"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><textarea name="address"></textarea></td>
			</tr>
			<tr>
				<td><a href="listar.php">Listar Usuarios</a></td>
				<td><input name="submit_data" type="submit" value="Insert Data"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>