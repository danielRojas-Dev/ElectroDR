<?php 	
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">


	<link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/datatables/css/dataTables.bootstrap4.min.css">

	<!-- <link rel="stylesheet" href="../assets/css/scrolling-nav.css"> -->
	<link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../lib/datatables/css/responsive.bootstrap4.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">Sistema Kiosko</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Personas
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="../mod_barrios/index.php">Barrios</a>
								<a class="dropdown-item" href="../mod_proveedores/index.php">Proveedores</a>
								<a class="dropdown-item" href="#">Empleados</a>
							</div>
						</li>

					<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Articulos
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="../mod_tip_articulos/index.php">Tipo de Articulos</a>
								<a class="dropdown-item" href="#">Articulos</a>
								<a class="dropdown-item" href="../mod_formas_pagos/index.php">Formas de pago</a>
								<a class="dropdown-item" href="../mod_unida_medidas/index.php">Unidad de Medidas</a>
							</div>
						</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#">Ventas</a>
					</li>
					<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Usuarios
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="../mod_tip_usuario/index.php">Tipos de Usuarios</a>
								<a class="dropdown-item" href="../mod_est_usuario/index.php">Estado de Usuarios</a>
								<a class="dropdown-item" href="#">Usuario</a>
							</div>
						</li>
					<li class="nav-item">
						

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Usuario: <?php echo $_SESSION['usuario']; ?>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<!-- <div class="dropdown-divider"></div> -->
								<a class="dropdown-item" href="../mod_login/desconectar_usuario.php">Cerrar Sesiòn</a>
								<!-- <a class="dropdown-item" href="#">Something else here</a> -->
							</div>
						</li>

					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br> <br> <br> <br>