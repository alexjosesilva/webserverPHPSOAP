<?php
	
$server = new SoapServer(null, array('uri' => "http://127.0.0.1:8080/edsa-webserverPHP/server2"));

	function hello($name){
		return 'Helo '.$name;
	}

	$server->addFunction("hello");
	
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$server->handle();
	}
	else{
		 $functions = $server->getFunctions();
		 foreach($functions as $func){
			 print $func. "<br>";
		 }
	}
	
?>
