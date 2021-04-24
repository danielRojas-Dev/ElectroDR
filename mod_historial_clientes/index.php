<?php require_once '../layouts/head.php'; ?>
<?php 

$file = fopen("../mod_presupuestos/datosPdf/datos.txt", "r");

?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style='background-color:#D4E6F1;border-radius: 0.50rem;padding-top: 15px; padding-left:15px; padding-right:15px; padding-bottom:15px;'>
			<h1 class="page-header text-center">Historial Clientes Presupuestos</h1>
			<br>
			<div>
				<table id="myTable" class="table table-bordered table-striped display wrap" width="100%">
					<thead>

						<td>Nombre Cliente</td>
						<td>Descripcion Negocio</td>
						<td>Fecha</td>
						<td>Hora</td>
						<td>Ver Presupuesto</td>
					</thead>
					<tbody>
						<?php

						while(!feof($file)){
							$row = json_decode(fgets($file));
							// var_dump($row);
							if (!empty($row)) {
								echo 
								"<tr>
								<td>".$row[0]."</td>
								<td>".$row[1]."</td>
								<td>".$row[3]."</td>
								<td>".$row[4]."</td>";

								echo "
								<td>
								<a href='detalleHistorial.php?fechaPresupuesto=".$row[4]."' class='btn btn-warning btn-xm'><span class='fa fa-edit'></span></a>
								</td>
								</tr>";
							}
						}
						
						fclose($file);

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

</div>

<?php require_once '../layouts/footer.php'; ?>

