<?php 

require_once '../conexion/conexion.php';

$id = $_POST['id'];
$descrip_negocio = $_POST['descrip_negocio'];

try {
	$sql_negocio_upd = "UPDATE negocio SET descrip_negocio= '$descrip_negocio' WHERE id_negocio = '$id'";

	$result_negocio_upd = $conexion->query($sql_negocio_upd);
} catch (Exception $e) {

	echo '<script language = javascript>
	alert("Error al modificar el negocio, por favor verifique!")
	self.location = "index.php"
	</script>';

}

echo '<script language = javascript>
alert("Negocio modificado correctamente!")
self.location = "index.php"
</script>';

?>