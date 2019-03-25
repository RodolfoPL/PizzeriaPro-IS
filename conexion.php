<?php

	function conectar(){
		$user="root";
		$pass="root";
		$server="127.0.0.1";
		$db="Pizzeria";
		$conn = mysqli_connect($server,$user,$pass,$db)  or die ( "Error al conectar la DB" );
		return $conn;
	}

?>
