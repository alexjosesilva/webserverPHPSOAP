<?php

$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

		$sql = "select * from student";
		$result = mysqli_query($link,$sql);
		
		$produtos = array();
		
		$linha = mysqli_fetch_assoc($result);
		$total = mysqli_num_rows($result);
				
		$i =0;
		if($total > 0) {
			do {
				 echo "<br>".$linha['id']." ".$linha['name'];
				 $produtos[$i] = $linha;
				 $i++;
			}while($linha = mysqli_fetch_assoc($result));
		}
		print_r ($produtos);

mysqli_close($link);
				

?>