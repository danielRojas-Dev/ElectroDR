<?php require_once '../layouts/head.php'; ?>

<div class="container">
	<h1 class="page-header text-center">Agregar Nuevo Negocio</h1>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form method="POST" action="guardarNegocios.php">

				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label" for="descrip_negocio">Ingrese Descripcion Negocio:</label>
					</div>
					<div class="col-sm-12">
						<input type="text" autofocus class="form-control" id="descrip_negocio" name="descrip_negocio" required>
					</div>
				</div>

			</div> 
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" onClick="location.href='index.php'">Cancelar</button>
			<button type="submit" class="btn btn-primary">Guardar</a>
			</form>
		</div>
	</div>
</div>

</div>

<?php require_once '../layouts/footer.php'; ?>