<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$bd = "empresa";

	
	if($com = mysqli_connect($server, $user, $password, $bd)){
		//echo "Conexão feita com sucesso<br>";
	} else {
		//echo "Falha na conexão";
	}

?>