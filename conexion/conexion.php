<?php 

	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$base_de_datos = "electrodr";

	$conexion = new mysqli($servidor, $usuario, $password, $base_de_datos);

	if ($conexion->connect_errno) {
		echo "No se puedo realizar la conexion: ("
		. $conexion->connect_errno . ") " . $conexion->connect_errno;
	}

	
	$conexion->set_charset("utf8");
 ?>