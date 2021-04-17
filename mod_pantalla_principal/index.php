<?php include_once('../conexion/conexion.php');
	
     $sql = "SELECT * FROM usuario WHERE p1.id_negocio = n1.id_negocio AND p1.id_marca = m1.id_marca";

     $query = $conexion->query($sql);

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
    <link rel="shortcut icon" type="image/png" href="../assets/img/icon_Shortcut.png">
    <link rel="apple-touch-icon" href="../assets/img/icon_Shortcut.png">
    <link rel="apple-touch-startup-image"  href="../assets/img/icon_Shortcut.png">
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">


    <link rel="manifest" href="../assets/json/manifest.json">


    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/datatables/css/dataTables.bootstrap4.min.css">

    <!-- <link rel="stylesheet" href="../assets/css/scrolling-nav.css"> -->
    <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/datatables/css/responsive.bootstrap4.min.css">
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../assets/img/icon_Shortcut.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form name="login">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder=" Usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="Contraseña">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">

							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="button" name="button" class="btn login_btn">Iniciar Sesion</button>
				   </div>
					</form>
				</div>
		
				
			</div>
		</div>
	</div>

	<script language="JavaScript"> 
		function Login(){ 
			var done=0; 
			var usuario=document.login.usuario.value; 
			var password=document.login.password.value; 
			if (usuario=="USUARIO1" && password=="CONTRASEÑA1") { 
				window.location="TU_PAGINA_WEB.HTML"; 
			} 

			if (usuario=="" && password=="") { 
				window.location="errorpopup.html"; 
			} 
		} 
	</script> 
</center> 
<script language="Javascript"> 
	<!-- Begin 
	document.oncontextmenu = function(){return false} 
// End --> 
</script>

<?php require_once '../layouts/footer.php'; ?>