<?php 
//Proceso de conexión con la base de datos

require_once '../conexion/conexion.php';


//Inicio de variables de sesión
if (!isset($_SESSION)) {
	session_start();
}

//Recibir los datos ingresados en el formulario
$usuario= $_POST['usuario'];
$contrasena= $_POST['password'];



//Consultar si los datos son están guardados en la base de datos
$consulta= "SELECT * FROM usuario u1 WHERE u1.nombre_usuario = '$usuario' AND u1.contrasena = '$contrasena'"; 


$resultado=$conexion->query($consulta);

if ($fila = $resultado->fetch_assoc()) {


	$_SESSION['usuario'] = $fila['nombre_usuario'];

	
	header('location:../mod_pantalla_principal');
}else{

	echo '<script language = javascript>
	alert("A ingresado mal su usuario o su clave, vuelva a intentarlo")
	self.location = "../index.php"
	</script>';


}
?>