<?php 

require_once '../conexion/conexion.php';

$terminoBusqueda = $_POST['terminoBusqueda'];

$sqlTerminoBusqueda = "SELECT * FROM productos p1, negocio n1, marca m1 WHERE p1.id_negocio = n1.id_negocio AND p1.id_marca = m1.id_marca AND n1.descrip_negocio LIKE '%$terminoBusqueda%'";

$resultTerminoBusqueda = $conexion->query($sqlTerminoBusqueda);

$resultJsonTerminoBusqueda = [];

if (!$resultTerminoBusqueda) {
	$resultJsonTerminoBusqueda = ['estado' => false, 'datosTerminoBusqueda' => 'error en la consulta'];
}else{
	while ($rowTerminoBusqueda = $resultTerminoBusqueda->fetch_assoc()) {
		$resultJsonTerminoBusqueda[] = $rowTerminoBusqueda;
	}
}
echo json_encode($resultJsonTerminoBusqueda);

?>