<?php

// Includs client to get $client object
include 'cliente.php';

$id = $_GET['id']; // id from url

/**
* Calling the "delete" method by "__soapCall" from SOAP SERVER 
* $client: object of SOAP CLIENT
* @params: $id
*/
if( $client->call("excluirAluno", array($id)) ){
	$message = "Record is deleted successfully.";
}else {
	$message = "Sorry, Record is not deleted.";
}

echo $message;
?>
<a href="listar.php">Back to List</a>