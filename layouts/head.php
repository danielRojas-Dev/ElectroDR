<?php

session_start();

if (($_SESSION['usuario']) != ""){
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ElectroDR</title>
    <meta name="description" content="Bienvenido a ElectroDR :)">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <link rel="shortcut icon" type="image/png" href="../assets/img/enchufe_shortcut.png">
    <link rel="apple-touch-icon" href="../assets/img/enchufe_shortcut.png">
    <link rel="apple-touch-startup-image"  href="../assets/img/enchufe_shortcut.png">


    <link rel="manifest" href="../assets/json/manifest.json">


    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/fondo_principal.css">
    <link rel="stylesheet" type="text/css" href="../lib/datatables/css/dataTables.bootstrap4.min.css">

    <!-- <link rel="stylesheet" href="../assets/css/scrolling-nav.css"> -->
    <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/datatables/css/responsive.bootstrap4.min.css">

</head>
<body>

    <style>
@import url('http://fonts.cdnfonts.com/css/sf-sports-night');
</style>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<div class="container">
            <a style="font-family: 'SF Sports Night', sans-serif; font-size: 25px;" class="navbar-brand js-scroll-trigger" href="../mod_pantalla_principal/index.php">Electro DR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../mod_pantalla_principal/index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../mod_buscador/buscador.php">Buscador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../mod_presupuestos/index.php">Realizar Presupuesto</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../mod_productos/index.php">Agregar Produtos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../mod_negocios/index.php">Negocios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../mod_marcas/index.php">Marcas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../mod_login/desconectar_usuario.php">Cerrar Sesion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br> <br> <br> <br>

<?php
}else{
    header('location:../index.php');
}
?>