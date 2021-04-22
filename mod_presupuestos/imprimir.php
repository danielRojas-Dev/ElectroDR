<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Imprimir presupuesto</title>
  <meta name="description" content="Bienvenido a ElectroDR :)">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <link rel="shortcut icon" type="../image/png" href="../assets/img/icon_Shortcut.png">
  <link rel="apple-touch-icon" href="../assets/img/icon_Shortcut.png">
  <link rel="apple-touch-startup-image"  href="../assets/img/icon_Shortcut.png">
  <link rel="manifest" href="../assets/json/manifest.json">


  <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../lib/datatables/css/dataTables.bootstrap4.min.css">

  <!-- <link rel="stylesheet" href="assets/css/scrolling-nav.css"> -->
  <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../lib/datatables/css/responsive.bootstrap4.min.css">
</head>
<body >




	<?php
	date_default_timezone_set('America/Argentina/Buenos_Aires');

	require '../lib/pdf/vendor/autoload.php';  
	use Spipu\Html2Pdf\Html2Pdf;

	$nombreNegocio = $_GET['nombreNegocio'];
	$datosParaImprimir = json_decode($_GET['datosParaImprimir']);

	?>


	<div class="container">
		<div class="row">
			<table width="100%">
				<tr>
					<td width="20%">
						<img src="../assets/img/icon_Shortcut.png" width="75" height="75">
					</td>
					<td class="text-center">
						<H3><b>Nombre Empresa:</b> Electro DR</H3>
						<H4><b>Telefono Empresa:</b> 370590488</H4>
					</td>
					<td width="20%">
						<h6><b>Fecha :</b>
							<?php
							echo date("d/m/y");
							?></h6> 

							<h6>
								<?php
								echo "<b>Hora  :</b>".date("h:i:s");
								?></h6> 
							</td>
						</tr>
					</table>
					<hr>
					<table   class="table table-bordered ">
						<tr>
							<td class="text-center">
								<h5>  </h5> 
								<h5><b> Prespuesto de Materiales-Negocio: </b><?php echo $nombreNegocio; ?></h5> 
							</td>    
						</tr>
					</table>    
					<hr>
					<table  class="table table-stripped table-bordered nowrap ">
						<thead>
							<tr style="background-color:#5D6D7E ;">
								<th class="text-center">Nombre Producto</th>
								<th class="text-center">Descripcion Producto</th>
								<th class="text-center">Marca</th>
								<th class="text-center">Cantidad</th>
								<th class="text-center">Precio Unico</th>
								<th class="text-center">Precio Total</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$totalPresupuesto = 0;
							for ($i=0; $i <count($datosParaImprimir); $i++) { 
								$totalPresupuesto += $datosParaImprimir[$i][4] * $datosParaImprimir[$i][6];
								?>
								<tr style="background-color:#85C1E9;">     
									<td class="text-center"><?php echo $datosParaImprimir[$i][0]; ?></td>
									<td class="text-center"><?php echo $datosParaImprimir[$i][1]; ?></td>
									<td class="text-center"><?php echo $datosParaImprimir[$i][2]; ?></td>
									<td class="text-center"><?php echo $datosParaImprimir[$i][6]; ?></td>
									<td class="text-center">$<?php echo $datosParaImprimir[$i][4]; ?></td>
									<td class="text-center"><b>$<?php echo $datosParaImprimir[$i][4] * $datosParaImprimir[$i][6]; ?></b></td>
								</tr>
								<?php 
							}

							?>
						</tbody>
					</table>
					<h4>Total Presupuesto: <b>$<?php echo $totalPresupuesto; ?></b></h4>
					<br>           
					<hr>
					<div id="botones">
						<button type="button" class="btn btn-danger" onClick = "javascript:window.close();" > Volver</button>

						<button type="button" onclick="javascript:window.print();" class="btn btn-success"><i class="fa fa-print"></i> Imprimir</button>
					</div>
				</div>
			</div>

			<style type="text/css" media="print">
				@media print {
					#botones {display:none;}
				}
			</style>
		</body>
		</html>

