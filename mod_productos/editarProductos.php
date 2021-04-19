<?php require_once '../layouts/head.php'; ?>


<div class="container">
	<h1 class="page-header text-center">Editar Frecuencia</h1>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<?php 

			require_once '../conexion/conexion.php';

			$id = $_GET['id_productos'];

			$sqlProductos = "SELECT * FROM productos WHERE id_productos = '$id'";

			$resultProductos = $conexion->query($sqlProductos);

			$row_upd = $resultProductos->fetch_assoc();

			// Obtencion de los datos de la tabla marca

			$sqlMarca = "SELECT * FROM marca";
			$resultMarca = $conexion->query($sqlMarca);

			// Obtencion de los datos de la tabla negocio

			$sqlNegocio = "SELECT * FROM negocio";
			$resultNegocio = $conexion->query($sqlNegocio);

			?>

			<form method="POST" action="modificarProductos.php">

				<input type="hidden" class="form-control" name="id" value="<?php echo $row_upd['id_productos']; ?>">

				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label" for="nombre_producto">Ingrese Nombre Producto:</label>
					</div>
					<div class="col-sm-12">
						<input type="text" autofocus class="form-control" id="nombre_producto" name="nombre_producto" required value="<?php echo $row_upd['nombre'] ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label" for="desc_produc">Ingrese Descripcion Producto:</label>
					</div>
					<div class="col-sm-12">
						<input type="text" autofocus class="form-control" id="desc_produc" name="desc_produc" required value="<?php echo $row_upd['desc_produc'] ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label" for="precio_produc">Ingrese Precio Producto:</label>
					</div>
					<div class="col-sm-12">
						<input type="number" autofocus class="form-control" id="precio_produc" name="precio_produc" required value="<?php echo $row_upd['precio'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="marca">Seleccione una Marca</label>
					<select class="form-control" id="marca" name="marca">
						<option selected disabled value="0">Elija una Marca:</option>
						<?php while($rowMarca = $resultMarca->fetch_assoc()): ?>
							<?php if ($rowMarca['id_marca'] == $row_upd['id_marca']): ?>
								<option selected value="<?php echo $rowMarca['id_marca'] ?>"><?php echo $rowMarca['descrip_marca']; ?></option>
								<?php else: ?>
									<option value="<?php echo $rowMarca['id_marca'] ?>"><?php echo $rowMarca['descrip_marca']; ?></option>
								<?php endif ?>
							<?php endwhile; ?>
						</select>
					</div>


					<div class="form-group">
						<label for="negocio">Seleccione un Negocio</label>
						<select class="form-control" id="negocio" name="negocio">
							<option selected disabled value="0">Elija un Negocio:</option>
							<?php while($rowNegocio = $resultNegocio->fetch_assoc()): ?>
								<!-- Condicion para elefir la opcion elegida -->
								<?php if ($rowNegocio['id_negocio'] == $row_upd['id_negocio']): ?>
									<
									<option selected value="<?php echo $rowNegocio['id_negocio'] ?>"><?php echo $rowNegocio['descrip_negocio']; ?></option>
									<?php else: ?>
										<option value="<?php echo $rowNegocio['id_negocio'] ?>"><?php echo $rowNegocio['descrip_negocio']; ?></option>

									<?php endif ?>

								<?php endwhile ?>
							</select>
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
