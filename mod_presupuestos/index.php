<?php require_once '../layouts/head.php';   ?>

<?php
require_once '../conexion/conexion.php';
$sqlNegocio = "SELECT * FROM negocio";
$resultNegocio = $conexion->query($sqlNegocio);
?>

<div class="container" style="margin-bottom: 5%; background-color:#AED6F1;border-radius: 0.50rem;padding-top: 15px; padding-left:15px; padding-right:15px; padding-bottom:15px;">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label for="negocioPresupuesto">Seleccione un Negocio</label>
				<select class="form-control" id="negocioPresupuesto" name="negocioPresupuesto">
					<option selected disabled value="0">Elija un Negocio:</option>
					<?php while ($rowNegocio = $resultNegocio->fetch_assoc()) : ?>
						<option value="<?php echo $rowNegocio['id_negocio'] ?>"><?php echo $rowNegocio['descrip_negocio']; ?></option>
					<?php endwhile ?>

				</select><br>

			</div>


		</div>
		<br>
	</div>
	<div id="tablaResultBusqueda" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

	</div>
	<div id="tarjetaResultPresupuesto" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

	</div>

	<div class="modal fade" id="imprimirLista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						Cabecera
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="formModal" method="POST" action="./imprimir.php">
						<div class="form-group">
							<label for="nomCliente">
								Ingrese el nombre del Cliente
							</label>
							<input required type="text" id="nomCliente" class="form-control" name="nomCliente">
							<span id="alertNombre" style="display:none;"></span>
							<label for="tipoComprobante">
								Seleccione el tipo de Comprobante
							</label>
							<select required class="form-control" id="tipoComprobante" name="tipoComprobante">
								<option value="0" selected>Seleccione un Tipo de Comprobante</option>
								<option value="1">Proforma</option>
								<option value="2">Consumidor Final</option>
							</select>
							<span id="alertComprobantes" style="display: none;"></span>
							<br>


						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">
								Cancelar
							</button>
							<button type="button" id="imprimir" class="btn btn-primary">
								Imprimir
							</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>
</div>








<?php require_once '../layouts/footer.php'; ?>
<script src="../assets/js/presupuesto.js"></script>