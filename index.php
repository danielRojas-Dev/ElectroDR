

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ElectroDR</title>
	<meta name="description" content="Bienvenido a ElectroDR :)">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">
	<link rel="shortcut icon" type="image/png" href="assets/img/enchufe_shortcut.png">
	<link rel="apple-touch-icon" href="assets/img/enchufe_shortcut.png">
	<link rel="apple-touch-startup-image"  href="assets/img/enchufe_shortcut.png">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">


	<link rel="manifest" href="assets/json/manifest.json">


	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables/css/dataTables.bootstrap4.min.css">

	<!-- <link rel="stylesheet" href="../assets/css/scrolling-nav.css"> -->
	<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables/css/responsive.bootstrap4.min.css">
	<body >
		<div class="container h-100">
			<div class="d-flex justify-content-center h-100">
				<div class="user_card">
					<div class="d-flex justify-content-center">
						<div class="brand_logo_container">
							<img src="assets/img/enchufe_shortcut.png" class="brand_logo" alt="Logo">
						</div>
					</div>
					<div class="d-flex justify-content-center form_container">
						<form name="login" action="mod_login/script_acceso.php" method="POST">
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"></span>
								</div>
								<input type="text" name="usuario" class="form-control input_user" value="" placeholder=" Usuario">
							</div>
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"></span>
								</div>
								<input type="password" name="password" class="form-control input_pass" value="" placeholder="Contraseña">
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customControlInline">

								</div>
							</div>
							<div class="d-flex justify-content-center mt-3 login_container">
								<input type="submit"  class="btn login_btn" value="Iniciar Sesion">
							</div>
						</form>
					</div>
					
					
				</div>
			</div>
		</div>





		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/datatables/js/jquery.dataTables.min.js"></script>
		<script src="lib/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="lib/datatables/js/dataTables.responsive.min.js"></script>
		<script src="lib/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="assets/js/data_table.js"></script>
		<script src="assets/js/pwa.js"></script>

		<!-- <script src="assets/js/scrolling-nav.js"></script> -->

<script>
$(document).ready(function() {
document.querySelector('img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]').style.display = 'none'
   
});
</script>


	</body>
	</html>