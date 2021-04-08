<?php 

require_once '../conexion/conexion.php';

$id = $_GET['id_marca'];

try {
	$eliminar="DELETE FROM marca WHERE id_marca = '$id'";
	$resultado=$conexion->query($eliminar);
	if (!$resultado) {
		echo '<script language = javascript>
		alert("No se puede borrar la Marca porque posee registros relacionados, por favor verifique!")
		self.location = "index.php"
		</script>';	
	}
} catch (Exception $e) {

	echo '<script language = javascript>
	alert("Error al borrar la Marca, por favor verifique!")
	self.location = "index.php"
	</script>';

}

echo '<script language = javascript>
alert("Marca eliminado correctamente!")
self.location = "index.php"
</script>';

?>