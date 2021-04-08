<?php 

require_once '../conexion/conexion.php';

$id = $_GET['id_negocio'];

try {
	$eliminar="DELETE FROM negocio WHERE id_negocio = '$id'";
	$resultado=$conexion->query($eliminar);
	if (!$resultado) {
		echo '<script language = javascript>
		alert("No se puede borrar el Negocio porque posee registros relacionados, por favor verifique!")
		self.location = "index.php"
		</script>';	
	}
} catch (Exception $e) {

	echo '<script language = javascript>
	alert("Error al borrar el Negocio, por favor verifique!")
	self.location = "index.php"
	</script>';

}

echo '<script language = javascript>
alert("Negocio eliminado correctamente!")
self.location = "index.php"
</script>';

?>