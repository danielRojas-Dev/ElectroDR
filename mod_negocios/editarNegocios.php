<?php require_once '../layouts/head.php'; ?>


<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


			<?php 

			require_once '../conexion/conexion.php';

			$id = $_GET['id_negocio'];

			$sql = "SELECT * FROM negocio WHERE id_negocio = '$id'";

			$result = $conexion->query($sql);


			$row_upd = $result->fetch_assoc();
			?>

			<form method="POST" style='background-color:#C2C2C2;border-radius: 0.50rem;padding-top: 15px; padding-left:15px; padding-right:15px; padding-bottom:15px;' action="modificarNegocios.php">

				<h1 class="page-header text-center">Editar Negocios</h1>

				<input type="hidden" class="form-control" name="id" value="<?php echo $row_upd['id_negocio']; ?>">

				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label">Editar Descripcion Negocio:</label>
					</div>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="descrip_negocio" required autofocus value="<?php echo $row_upd['descrip_negocio']; ?>">
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-danger" onClick="location.href='index.php'">Cancelar</button>
					<button type="submit" class="btn btn-warning">Modificar</a>
					</form>
				</div>
			</div>
		</div>

	</div>

	<?php require_once '../layouts/footer.php'; ?>
