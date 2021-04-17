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
		<table id="myTable"  class="table table-bordered table-striped display wrap" width="100%">
		<thead>
		<td>Imagen</td>
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
			<td><a class="btnProducto" href="#">${nombre}</a></td>	
			<td>${desc_produc}</td>	
			<td>${descrip_marca}</td>	
			<td>${descrip_negocio}</td>	
			<td>${precio}</td>	
			<td>${fecha_modificacion}</td>	
			</tr>
			`;
		}
		
		tabla += `
		
		</div>`;
		divTabla.html(`${tabla}`);
		// dataTable.;
		$("#myTable").DataTable({responsive: true});
	}

	$(document).on("click", ".btnProducto", function(e){
		let nombreProducto = e.target.text;
		let datosProductos = [];

		$(this).parents("tr").find("td").each(function() {
			datosProductos.push($(this).html()); 
		});

		datosProductos.splice(0, 2);
		datosProductos.unshift(nombreProducto);
		const cantProducto = prompt("Ingrese la cantidad de productos: ");

		// localStorage.setItem(longitud, datosProductos)

		aniadirProductoAlPresupuesto();
	});


	const aniadirProductoAlPresupuesto = ()=>{
			console.log(localStorage.getItem("1"));

		for (let i =0; i < localStorage.length; i++) {
		}

		const tarjetaPresupuestoFinal = $('#tarjetaResultPresupuesto');

		let tablaPresupuestoFinal = `
		<br>
		<div class="card text-center">
			<div class="card-header">
			Presupuesto de:
				</div>
					<div class="card-body">
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			<div class="card-footer text-muted">
			Presupuesto Final es de: 
			</div>
		</div>`;

		tarjetaPresupuestoFinal.html(tablaPresupuestoFinal);

	}


});	

