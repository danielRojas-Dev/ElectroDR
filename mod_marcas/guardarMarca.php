<?php 

// var_dump($_POST);
require_once '../conexion/conexion.php';

$descrip_marca = $_POST['descrip_marca'];

try {
	
	$sql_marca = "INSERT INTO `marca`(`descrip_marca`) VALUES ('$descrip_marca')";

	$result_marca = $conexion->query($sql_marca);

} catch (Exception $e) {

	echo '<script language = javascript>
	alert("Error al guardar la marca, por favor verifique!")
	self.location = "index.php"
	</script>';

}

echo '<script language = javascript>
alert("Marca agregada correctamente!")
self.location = "index.php"
</script>';

?>