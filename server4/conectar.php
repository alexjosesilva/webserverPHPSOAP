<?php

/**
* conexion
*/

function conectar(){
	
	$con = mysql_connect("localhost","root","") or die(mysql_error());

	if($con){
		mysql_select_db("teste",$con);
		return $con;
	}else{
		return("-1");
	}
}
?>