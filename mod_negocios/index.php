<?php require_once '../layouts/head.php'; ?>

<div class="container">
	<h1 class="page-header text-center">Listado Negocios</h1>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: rgb(0,0,0,0.30); border-radius: 0.50rem;">
			<div>
				<a href="nuevaNegocios.php" class="btn btn-primary"><span class="fa fa-plus"></span> Nuevo Negocio</a>
			</div>
			<br>
			<div>
				<table id="myTable" class="table table-bordered table-striped display wrap" width="100%">
					<thead>

						<td>ID Negocio</td>
						<td>Descripcion Negocio</td>
						<th>Modificar</th>
						<th>Eliminar</th>
					</thead>
					<tbody>
						<?php
						include_once('../conexion/conexion.php');

						$sql = "SELECT * FROM negocio";

						$query = $conexion->query($sql);
						while($row = $query->fetch_assoc()){
							echo 
							"<tr>
							<td>".$row['id_negocio']."</td>
							<td>".$row['descrip_negocio']."</td>";

							echo "
							<td>
							<a href='editarNegocios.php?id_negocio=".$row['id_negocio']."' class='btn btn-warning btn-xm'><span class='fa fa-edit'></span></a>
							</td>
							<td>
							<a href='eliminarNegocios.php?id_negocio=".$row['id_negocio']."' class='btn btn-danger btn-xm'><span class='fa fa-trash'></span></a>
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