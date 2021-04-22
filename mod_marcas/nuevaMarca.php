<?php require_once '../layouts/head.php'; ?>

<div class="container">

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form method="POST" style='background-color:#D4E6F1;border-radius: 0.50rem;padding-top: 15px; padding-left:15px; padding-right:15px; padding-bottom:15px;'  action="guardarMarca.php">
				<h1 class="page-header text-center">Nueva Marca</h1>
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label" for="descrip_marca">Ingrese Descripcion Marca:</label>
					</div>
					<div class="col-sm-12">
						<input type="text" autofocus class="form-control" id="descrip_marca" name="descrip_marca" required>
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
</div>

</div>

<?php require_once '../layouts/footer.php'; ?>