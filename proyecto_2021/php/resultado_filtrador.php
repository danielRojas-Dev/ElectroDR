
<?php


require_once '../BD/connect.php';

$salida = "";

$query = "SELECT * FROM productos p1, descproducto d1, negocio n1, marca m1 WHERE p1.id_DescProduc = d1.id_descProduc AND p1.id_negocio = n1.id_negocio AND p1.id_marca = m1.id_marca ";

$termino = "";


if(isset($_POST['consulta'])){

  $termino =$mysqli->real_escape_string($_POST['consulta']);

  $query = "SELECT p1.Nombre, d1.descripcion, m1.descripcion, n1.descripcion, d1.fecha_Precio_Actualizada FROM productos p1 INNER JOIN descproducto d1 on p1.id_productos = d1.id_descProduc INNER JOIN marca m1 on m1.id_marca = p1.id_marca INNER JOIN negocio n1 on n1.id_negocio = p1.id_negocio WHERE p1.Nombre LIKE '%".$termino."%' or d1.descripcion LIKE '%".$termino."%' or m1.descripcion LIKE '%".$termino."%' or n1.descripcion LIKE '%".$termino."%'";

}


$resultado =$mysqli->query($query);

if($resultado->num_rows >= 1){

  $salida.="<table class='table table-hover table-dark'>
              <thead>
                <tr>
                  <td>Nombre</td> 
                  <td>Descripcion</td>
                  <td>Marca</td>
                  <td>Negocio</td>
                  <td>Ultima Actualizacion</td>
                </tr>
              </thead>
            </tbody";


      while ($fila = $resultado->fetch_assoc()) {

        $salida.= " <tr>
                      <td>".$fila['Nombre']."</td> 
                      <td>".$fila['descripcion']."</td>
                      <td>".$fila['descripcion']."</td>
                      <td>".$fila['descripcion']."</td>
                      <td>".$fila['fecha_Precio_Actualizada']."</td>
                    </tr> ";
      }

      $salida.= "</tbody></table>";

}else

$salida.= "No se ha encontrado ningun dato similar :(";


echo $salida;

$mysqli->close();



?>