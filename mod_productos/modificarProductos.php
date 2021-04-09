<?php 

require_once '../conexion/conexion.php';

$id = $_POST['id'];
$nombre_producto = $_POST['nombre_producto'];
$desc_produc = $_POST['desc_produc'];
$precio_produc = $_POST['precio_produc'];
$marca = $_POST['marca'];
$negocio = $_POST['negocio'];


try {
	$sql_negocio_upd = "UPDATE productos SET nombre= '$nombre_producto', desc_produc= '$desc_produc', precio= '$precio_produc', fecha_modificacion= NOW(), id_negocio= '$negocio', id_marca= '$marca' WHERE id_productos = '$id'";

	$result_negocio_upd = $conexion->query($sql_negocio_upd);
} catch (Exception $e) {

	echo '<script language = javascript>
	alert("Error al modificar el producto, por favor verifique!")
	self.location = "index.php"
	</script>';

}

echo '<script language = javascript>
alert("Producto modificado correctamente!")
self.location = "index.php"
</script>';

?>