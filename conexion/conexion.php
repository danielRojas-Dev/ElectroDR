<?php 

	$servidor = "localhost";
	$usuario = "id16446890_electrodr_14";
	$password = "DanielRojas_10";
	$base_de_datos = "id16446890_electrodr_nueva";

	$conexion = new mysqli($servidor, $usuario, $password, $base_de_datos);

	if ($conexion->connect_errno) {
		echo "No se puedo realizar la conexion: ("
		. $conexion->connect_errno . ") " . $conexion->connect_errno;
	}

	$conexion->set_charset("utf8");
 ?>