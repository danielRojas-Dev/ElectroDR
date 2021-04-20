<?php require_once '../layouts/head.php'; ?>

<div class="container" >
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style='background-color:#C2C2C2;border-radius: 0.50rem;padding-top: 15px; padding-left:15px; padding-right:15px; padding-bottom:15px;'>
			<h1 class="page-header text-center">Productos</h1>
			<div>
				<a href="nuevoProductos.php" class="btn btn-primary"><span class="fa fa-plus"></span> Nuevo Producto</a>
			</div>
			<br>
			<div>
				<table id="myTable" class="table table-bordered table-striped display wrap" width="100%">
					<thead>
						<td>Imagen</td>
						<td>Nombre Producto</td>
						<td>Descripcion Producto</td>
						<td>Precio</td>
						<td>Marca</td>
						<td>Negocio</td>
						<td>Fecha Modificacion</td>
						<th>Modificar</th>
						<th>Eliminar</th>
					</thead>
					<tbody>
						<?php
						include_once('../conexion/conexion.php');

						$sql = "SELECT * FROM productos p1, negocio n1, marca m1 WHERE p1.id_negocio = n1.id_negocio AND p1.id_marca = m1.id_marca";

						$query = $conexion->query($sql);
						while($row = $query->fetch_assoc()){
							echo 
							"<tr>
							<td><img style='width:100px; border-radius:0.50rem;' src=".$row['ruta_img']."></td>
							<td>".$row['nombre']."</td>
							<td>".$row['desc_produc']."</td>
							<td>".$row['precio']."</td>
							<td>".$row['descrip_marca']."</td>
							<td>".$row['descrip_negocio']."</td>
							<td>".$row['fecha_modificacion']."</td>
							";

							echo "
							<td>
							<a href='editarProductos.php?id_productos=".$row['id_productos']."' class='btn btn-warning btn-xm'><span class='fa fa-edit'></span></a>
							</td>
							<td>
							<a href='eliminarProductos.php?id_productos=".$row['id_productos']."' class='btn btn-danger btn-xm'><span class='fa fa-trash'></span></a>
							</td>


							</tr>";
						}


						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

</div>

<?php require_once '../layouts/footer.php'; ?>