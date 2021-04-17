$(document).ready(function() {

	$('#negocio').change(async function(e) {

		const comboNegocioDescripcion = $('#negocio option:selected');

		const resultBusquedaProductos = await fetch('../mod_presupuestos/resultProductosNegocios.php', {
			method: 'POST',
			body:  JSON.stringify({'terminoBusqueda':comboNegocioDescripcion})
		})
		.then(function(response) {
			if(response.ok) {
				return response.json()
			} else {
				throw new "Error en la llamada Ajax";
			}

		})
		.then(function(response) {
			console.log(response);
		})
		.catch(function(err) {
			console.log(err);
		});

	
		// console.log(comboNegocioDescripcion.text());
	


	});


});