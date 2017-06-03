<?php

// Includs client to get $client object
include 'cliente.php';

$id = $_GET['id']; // id from url
$result = $client->call('excluirAluno',array('id' =>$id));


if( $result ){
	$message = "Record is deleted successfully.";
}else {
	$message = "Sorry, Record is not deleted.";
}

echo $message;
?>
<a href="listar.php">Back to List</a>