<?php 

require_once '../conexion/conexion.php';


$id = $_GET['id_productos'];







try {
	$eliminar="DELETE FROM `productos` WHERE `id_productos` = '$id'";
	$resultado=$conexion->query($eliminar);

} catch (Exception $e) {

	echo '<script language = javascript>
	alert("Error al borrar el Producto, por favor verifique!")
	self.location = "index.php"
	</script>';

}

echo '<script language = javascript>
alert("Producto eliminado correctamente!")
self.location = "index.php"
</script>';

?>