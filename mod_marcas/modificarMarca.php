<?php 

require_once '../conexion/conexion.php';

$id = $_POST['id'];
$descrip_marca = $_POST['descrip_marca'];

try {
	$sql_marca_upd = "UPDATE marca SET descrip_marca= '$descrip_marca' WHERE id_marca = '$id'";

	$result_marca_upd = $conexion->query($sql_marca_upd);
} catch (Exception $e) {

	echo '<script language = javascript>
	alert("Error al modificar la Marca, por favor verifique!")
	self.location = "index.php"
	</script>';

}

echo '<script language = javascript>
alert("Marca modificado correctamente!")
self.location = "index.php"
</script>';

?>