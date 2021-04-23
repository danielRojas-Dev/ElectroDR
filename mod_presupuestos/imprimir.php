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
  <link rel="stylesheet" type="text/css" href="../lib/datatables/css/dataTables.bootstrap4.min.css">

  <!-- <link rel="stylesheet" href="assets/css/scrolling-nav.css"> -->
  <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../lib/datatables/css/responsive.bootstrap4.min.css">
</head>
<body style="background-image: url('../assets/img/fondo1_pdf.jpg');  background-size: cover;
  background-repeat: no-repeat;
  margin: 0;
  height: 100vh;">

<style>
@import url('http://fonts.cdnfonts.com/css/sf-sports-night');
</style>


	<?php
	date_default_timezone_set('America/Argentina/Buenos_Aires');

	require '../lib/pdf/vendor/autoload.php';  
	use Spipu\Html2Pdf\Html2Pdf;

	$nombreNegocio = $_GET['nombreNegocio'];
	$datosParaImprimir = json_decode($_GET['datosParaImprimir']);

	?>


	<div class="container" style="background: rgb(171, 178, 185, 0.60);">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="row">
			<table width="100%"  >
				<tr>
					<td style="padding-top: 5px;" width="20%">
						<img src="../assets/img/fondo_pdf_logo4.png" width="250" height="250">
					</td>
					<td class="text-center">
						<H1 style="font-family: 'SF Sports Night', sans-serif;font-size: 65px;"> Electro DR</H1>
						<h6  style="font-family: 'SF Sports Night NS', sans-serif; font-size: 30px;"> Instalaciones Electricas y Aires Acondicionados</h6>
					</td><br><br><br><br><br></td><br><br><br><br><br>
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
					

					
					<table  class="table table-bordered table-striped display wrap" width="100%">
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

						<button type="button" onclick="javascript:window.print();" class="btn btn-success"><i class="fa fa-print"></i> Imprimir</button>
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
<script src="../lib/datatables/js/jquery.dataTables.min.js"></script>
<script src="../lib/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="../lib/datatables/js/dataTables.responsive.min.js"></script>
<script src="../lib/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/js/data_table.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script> -->


</body>
</html>