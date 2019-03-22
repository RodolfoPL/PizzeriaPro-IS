<?php
	
	function conectar(){
		$user="root";
		$pass="root";
		$server="127.0.0.1";
		$db="bd";
		$conn = mysqli_connect($server,$user,$pass,$db)  or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );;


		print "Conexion exitosa";
		return $conn;
	}

?>