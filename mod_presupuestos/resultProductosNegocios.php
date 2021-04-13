<?php 

require_once '../conexion/conexion.php';

$comboNegocioDescripcion = $_POST['terminoBusqueda'];

echo json_encode($comboNegocioDescripcio);

// $sqlBuscarProductos = "SELECT * FROM productos p1, negocio n1, marca m1 WHERE p1.id_negocio = n1.id_negocio and p1.id_marca = m1.id_marca and n1.descrip_negocio LIKE '%$comboNegocioDescripcion%'";

// $resultBuscarProductos = $conexion->query($sqlBuscarProductos);

// if (!$sqlBuscarProductos) {
// 	echo json_encode("Error en la consulta");
// }else{
// 	echo json_encode($resultBuscarProductos->fetch_assoc());
// }

 ?>