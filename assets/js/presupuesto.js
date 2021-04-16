$(document).ready(function() {
	$('#negocioPresupuesto').on('change',function(e){
		const valor = $(this).children("option:selected").text();

		realizarPeticion(valor);
	});


	const realizarPeticion = (descripcionNegocio)=>{

		const data = {
			terminoBusqueda: descripcionNegocio 
		};

		$.ajax({
			type: "POST",
			url: '../mod_presupuestos/buscadorProductos.php',
			data: data,
			success: function(response){
				// return ;
				// response
				armarTabla(JSON.parse(response));
			},
			error: function() {
				console.log("No se ha podido obtener la información");
			}
		});
	}

	const armarTabla = (datosTabla)=>{

		// console.log(datosTabla)
		const divTabla = $("#tablaResultBusqueda");

		let tabla = `
		<div>
		<table id="myTable" class="table table-bordered table-striped display wrap" width="100%">
			<thead>
				<td>Ruta Img</td>
				<td>Nombre Producto</td>
				<td>Descripcion Producto</td>
				<td>Marca</td>
				<td>Descripcion Negocio</td>
				<td>Precio</td>
				<td>Fecha Modificacion</td>
			</thead>
		<tbody>`;

		for (let i = 0; i < datosTabla.length; i++) {
			const { 
				desc_produc, 
				descrip_negocio, 
				fecha_modificacion,
				descrip_marca,
				nombre,
				precio,
				ruta_img
			} = datosTabla[i];

			tabla += `
			<tr>

				<td><img style='width:100%;' src="${ruta_img}"</td>	
				<td>${nombre}</td>	
				<td>${desc_produc}</td>	
				<td>${descrip_marca}</td>	
				<td>${descrip_negocio}</td>	
				<td>${precio}</td>	
				<td>${fecha_modificacion}</td>	
			</tr>
			`;
		}
		
		tabla += `
		</tbody>
		</table>
		</div>`;
		divTabla.html(`${tabla}`);
		// dataTable.;
		$("#myTable").DataTable({responsive: true});
	}
});