<?php require_once '../layouts/head.php';   ?>

<?php 
require_once '../conexion/conexion.php';



// Obtencion de los datos de la tabla negocio

$sqlNegocio = "SELECT * FROM negocio";
$resultNegocio = $conexion->query($sqlNegocio);
?>





<div class="container">
	
	
		<div class="form-group">
					<label for="negocio">Seleccione un Negocio</label>
					<select class="form-control" id="negocio" name="negocio">
						<option selected disabled value="0">Elija un Negocio:</option>
						<?php while($rowNegocio = $resultNegocio->fetch_assoc()): ?>
							<option value="<?php echo $rowNegocio['id_negocio'] ?>"><?php echo $rowNegocio['descrip_negocio']; ?></option>
						<?php endwhile ?>
					</select>
				</div>





		<div class="container">
    <h1 class="page-header text-center">Buscador</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: rgb(0,0,0,0.30); border-radius: 0.50rem;">
            <table id="myTable" class="table table-bordered table-striped display wrap" width="100%">

                <thead>
                    <th>Imagen</th>
                    <td>Nombre</td>
                    <td>Descripcion del Producto</td>
                    <th>Marca</th>
                    <th>Negocio</th>
                    <th>Precio</th>
                    <th>Fecha de Modificacion</th>
                    <th>Agregar a al Presupuesto</th>
                    
                </thead>

                <tbody>


                    <?php
                     include_once('../conexion/conexion.php');
                    $sqlBuscarProductos = "SELECT * FROM productos p1, negocio n1, marca m1 WHERE p1.id_negocio = n1.id_negocio and p1.id_marca = m1.id_marca and n1.descrip_negocio";

                    $query = $conexion->query($sqlBuscarProductos);

                
                    while($row = $query->fetch_assoc()){
                        echo 
                        "<tr>
                        <td><img style='width:100%;' src=".$row['ruta_img']."></td>
                        <td>".$row['nombre']."</td>
                        <td>".$row['desc_produc']."</td>
                        <td>".$row['descrip_marca']."</td>
                        <td>".$row['descrip_negocio']."</td>
                        <td>".$row['precio']."</td>
                        <td>".$row['fecha_modificacion']."</td>
                        <td>".$row['fecha_modificacion']. "</td>";

                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
	

</div>






<?php require_once '../layouts/footer.php' ; ?>