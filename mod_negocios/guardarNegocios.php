<?php 

// var_dump($_POST);
require_once '../conexion/conexion.php';

$descrip_negocio = $_POST['descrip_negocio'];

try {
	
	$sql_negocios = "INSERT INTO `negocio`(`descrip_negocio`) VALUES ('$descrip_negocio')";

	$result_negocios = $conexion->query($sql_negocios);

} catch (Exception $e) {

	echo '<script language = javascript>
	alert("Error al guardar el negocio, por favor verifique!")
	self.location = "index.php"
	</script>';

}

echo '<script language = javascript>
alert("Negocio agregado correctamente!")
self.location = "index.php"
</script>';

?>