<?php require_once '../layouts/head.php'; ?>

<div class="container">
	<h1 class="page-header text-center">Listado Marcas</h1>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div>
				<a href="nuevaMarca.php" class="btn btn-primary"><span class="fa fa-plus"></span> Nueva Marca</a>
			</div>
			<br>
			<div>
				<table id="myTable" class="table table-bordered table-striped display wrap" width="100%">
					<thead>

						<td>ID Marca</td>
						<td>Descripcion Marca</td>
						<th>Modificar</th>
						<th>Eliminar</th>
					</thead>
					<tbody>
						<?php
						include_once('../conexion/conexion.php');

						$sql = "SELECT * FROM marca";

						$query = $conexion->query($sql);
						while($row = $query->fetch_assoc()){
							echo 
							"<tr>
							<td>".$row['id_marca']."</td>
							<td>".$row['descrip_marca']."</td>";

							echo "
							<td>
							<a href='editarMarca.php?id_marca=".$row['id_marca']."' class='btn btn-warning btn-xm'><span class='fa fa-edit'></span></a>
							</td>
							<td>
							<a href='eliminarMarca.php?id_marca=".$row['id_marca']."' class='btn btn-danger btn-xm'><span class='fa fa-trash'></span></a>
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