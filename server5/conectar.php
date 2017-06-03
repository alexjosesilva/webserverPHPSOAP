<?php

/**
* conexion
*/

function conectar(){
	
	$con = mysql_connect("localhost","root","") or die(mysql_error());

	if($con){
		mysql_select_db('crud_soap',$con);
		return $con;
	}else{
		return("-1");
	}
}
?>