<?php

	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'bd_gestao';
	
	$connect = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
	
	/*if(mysqli_connect_error()) {
		echo "Erro na conexão";
	}else{
		echo"Conexão efetuada com sucesso";
	}*/

?>