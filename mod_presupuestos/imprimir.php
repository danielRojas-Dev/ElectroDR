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
	<link href = " http://fonts.cdnfonts.com/css/sf-sports-night " rel = "hoja de estilo" >

	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">

</head>
<body style="background-image: url('../assets/img/fondo1_pdf_sinColor.jpg');  background-size: cover;
background-repeat: no-repeat;
margin: 0;
height: 100vh;">

<style>
	@import url('http://fonts.cdnfonts.com/css/sf-sports-night');
</style>


<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

$nombreNegocio = $_GET['nombreNegocio'];
$datosParaImprimir = json_decode($_GET['datosParaImprimir']);
$nombreCliente = $_GET['nombreCliente'];

$fecha = date("d/m/y");
$hora = date("h:i:s");
$jump = "\r\n";
$historialDatosPdf = [
	$nombreCliente,
	$nombreNegocio,
	$datosParaImprimir,
	$fecha,
	$hora
];


?>


<div class="container" style="background: rgb(247, 220, 111, 0.60); ;">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="row">
			<table width="100%"  >
				<tr>
					<td style="padding-top: 5px;" width="20%">
						<img src="../assets/img/fondo_pdf_logo_sincolor4.png" width="250" height="250">
					</td>
					<td class="text-center">
						<H1 style="font-family: 'SF Sports Night', sans-serif;font-size: 65px;"> Electro DR</H1>
						<h6  style="font-family: 'SF Sports Night NS', sans-serif; font-size: 30px;"> Instalaciones Electricas y Aires Acondicionados</h6>
						<h6  style="font-family: 'SF Sports Night NS', sans-serif; font-size: 15px;"> Presupuestos al 3704-590488</h6>


					</td><br><br><br><br><br></td><br><br><br><br><br>


					<td width="20%">
						<h6><b>Fecha :</b>
							<?php
							echo $fecha;
							?></h6> 

							<h6>
								<?php
								echo "<b>Hora  :</b>".$hora;
								?></h6> 
							</td>
						</tr>
					</table>



					<table  class="table table-bordered table-responsive table-striped display wrap  table-response" width="100%">
						<h6  style="font-family: 'SF Sports Night NS', sans-serif; font-size: 15px; text-align: right;">Comprobante NO valido como Factura</h6>
						<thead>
							<tr>
								<th class="text-center">Nombre Producto</th>
								<th class="text-center">Descripcion Producto</th>
								<th class="text-center">Marca</th>
								<th class="text-center">Cantidad</th>
								<th class="text-center">Precio Unico</th>
								<th class="text-center">Precio Total</th>
							</tr>
						</thead>
						<tbody >
							<?php 
							$totalPresupuesto = 0;
							for ($i=0; $i <count($datosParaImprimir); $i++) { 
								$totalPresupuesto += $datosParaImprimir[$i][4] * $datosParaImprimir[$i][6];
								?>
								<tr >     
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

						<input type="submit" onclick="javascript:window.print();" class="btn btn-success" value="Imprimir">
					</div>
				</div>
			</div>
		</div>


		<style type="text/css" media="print">
			@media print {
				#botones {display:none;}
			}
		</style>
		<script src="../lib/jquery/jquery.min.js"></script>
		<script src="../lib/bootstrap/js/bootstrap.min.js"></script>

	</body>
	</html>

	<?php 

	// $file = fopen("datosPdf/datos.txt", "r");

	// while(!feof($file)) {

	// 	var_dump(json_decode(fgets($file))). "<br />";

	// }

	// fclose($file);

		$file = "datosPdf/datos.txt";
		$fp = fopen($file, "a");
		fputs($fp, json_encode($historialDatosPdf));
		fputs($fp, "\r\n");
		fclose($fp);

	?>