<?php require_once '../layouts/head.php'; ?>

<?php 
require_once '../conexion/conexion.php';


// Obtencion de los datos de la tabla marca

$sqlMarca = "SELECT * FROM marca";
$resultMarca = $conexion->query($sqlMarca);

// Obtencion de los datos de la tabla negocio

$sqlNegocio = "SELECT * FROM negocio";
$resultNegocio = $conexion->query($sqlNegocio);
?>


<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form method="POST" style='background-color:#C2C2C2;border-radius: 0.50rem;padding-top: 15px; padding-left:15px; padding-right:15px; padding-bottom:15px;'  action="guardarProductos.php" enctype="multipart/form-data">

				<h1 class="page-header text-center">Nuevo Producto</h1>

				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label" for="nombre_producto">Ingrese Nombre Producto:</label>
					</div>
					<div class="col-sm-12">
						<input type="text" autofocus class="form-control" id="nombre_producto" name="nombre_producto" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label" for="desc_produc">Ingrese Descripcion Producto:</label>
					</div>
					<div class="col-sm-12">
						<input type="text" autofocus class="form-control" id="desc_produc" name="desc_produc" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label" for="img_produc">Elija una imagen para el Producto:</label>
					</div>
					<div class="col-sm-12">
						<input type="file" autofocus class="form-control" id="img_produc" name="img_produc" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-12">
						<label class="control-label modal-label" for="precio_produc">Ingrese Precio Producto:</label>
					</div>
					<div class="col-sm-12">
						<input type="number" autofocus class="form-control" id="precio_produc" name="precio_produc" required>
					</div>
				</div>

				<div class="form-group">
					<label for="marca">Seleccione una Marca</label>
					<select class="form-control" id="marca" name="marca">
						<option selected disabled value="0">Elija una Marca:</option>
						<?php while($rowMarca = $resultMarca->fetch_assoc()): ?>
							<option value="<?php echo $rowMarca['id_marca'] ?>"><?php echo $rowMarca['descrip_marca']; ?></option>
						<?php endwhile; ?>
					</select>
				</div>


				<div class="form-group">
					<label for="negocio">Seleccione un Negocio</label>
					<select class="form-control" id="negocio" name="negocio">
						<option selected disabled value="0">Elija un Negocio:</option>
						<?php while($rowNegocio = $resultNegocio->fetch_assoc()): ?>
							<option value="<?php echo $rowNegocio['id_negocio'] ?>"><?php echo $rowNegocio['descrip_negocio']; ?></option>
						<?php endwhile ?>
					</select>
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