$(document).ready(function() {

	localStorage.clear();

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
				ruta_img,
				id_productos
			} = datosTabla[i];

			tabla += `
			<tr>
			<td><img style='width:100px;' src="${ruta_img}"</td>	
			<td><a class="btnProducto" data-IdProducto="${id_productos}"  href="#">${nombre}</a></td>	
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
		let idProducto = e.target.getAttribute("data-IdProducto");
		let datosProductos = [];
		// console.log(idProducto)

		$(this).parents("tr").find("td").each(function() {
			datosProductos.push($(this).html()); 
		});

		datosProductos.splice(0, 2);
		datosProductos.unshift(nombreProducto);
		let cantProducto;
		while(true){
			cantProducto = prompt("Ingrese la cantidad de productos: ");

			if(!isNaN(cantProducto) && cantProducto != null && cantProducto != "" && cantProducto > 0 && Number.isInteger(parseInt(cantProducto))){
				break;
			}else if(!cantProducto){
				return;
			}else{	
				alert('Ingrese un numero valido para las cantidades del producto!');
				continue;
			}
		}
		datosProductos.push(cantProducto);

		localStorage.setItem("nombreNegocio", $('#negocioPresupuesto option:selected').text())
		localStorage.setItem(idProducto, datosProductos)

		aniadirProductoAlPresupuesto();
		$("html, body").animate({scrollTop: $(this).offset().top},600);
	});


	const aniadirProductoAlPresupuesto = ()=>{
		const tarjetaPresupuestoFinal = $('#tarjetaResultPresupuesto');
		let precioTotal = 0;
		let tablaPresupuestoFinal = "";
		let nombreNegocio = localStorage.getItem("nombreNegocio");

		


		tablaPresupuestoFinal = `
		<br>
		<div class="tablaPdf card text-center">
		<div class="card-header">
		<h1>Presupuesto de: ${(nombreNegocio) ? nombreNegocio : ""}</h1>
		</div>
		<div class="card-body">
		<h5 class="card-title">Listado Productos: </h5>
		<div class="table-responsive">
		<table id="myTableProductos"  class="table table-bordered table-dark table-striped display wrap" width="100%">
		<thead>
		<tr>
		<th scope="col">Nombre Producto</th>
		<th scope="col">Descripcion Producto</th>
		<th scope="col">Marca</th>
		<th scope="col">Cantidad</th>
		<th scope="col">Precio Unico</th>
		<th scope="col">Precio Total</th>
		<th scope="col">Eliminar</th>
		</tr>
		</thead>
		<tbody>

		`;


		for(let i = 0; i < localStorage.length; i++) {

			let clave = localStorage.key(i);
			if (clave != "nombreNegocio"){

				let resultProductos = localStorage.getItem(clave);

				arrayResultProductos = resultProductos.split(',');

				precioTotal += parseInt(arrayResultProductos[4] * parseInt(arrayResultProductos[6]));

				tablaPresupuestoFinal +=`<hr>
				<tr class="bg-success">
				<td scope="row">${arrayResultProductos[0]}</td>
				<td>${arrayResultProductos[1]}</td>
				<td>${arrayResultProductos[2]}</td>
				<td>${arrayResultProductos[6]}</td>
				<td>$ ${parseInt(arrayResultProductos[4])}</td>
				<td>$ ${parseInt(arrayResultProductos[4]) * parseInt(arrayResultProductos[6])}</td>
				<td><input type="button" value="Borrar" data-idListadoProductos="${clave}" class="borrarProducto btn btn-danger"></td></td>
				</tr>`;
			}
		}

		

		tablaPresupuestoFinal += `
		</tbody>
		</table>
		</div>
		<input type="button" name="limpiarListaPresupuest" id="limpiarListaPresupuesto" class="btn btn-warning" value="Vacia Lista">
		<input type="button" name="pdfListaPresupuest" id="pdfListaPresupuesto" class="btn btn-info" value="imprimir Lista">
		</div>
		<div class="card-footer">
		<h5>Presupuesto Final es de $ ${precioTotal}</h5>
		</div>
		</div>`;
		


		tarjetaPresupuestoFinal.html(tablaPresupuestoFinal);
		$("#myTableProductos").DataTable({responsive: true});


	}

	$(document).on("click", "#limpiarListaPresupuesto", function(e){

		localStorage.clear();

		aniadirProductoAlPresupuesto();
	});

	$(document).on("click", ".borrarProducto", function(e){

		let idProductoLista = e.target.getAttribute("data-idListadoProductos");
		localStorage.removeItem(idProductoLista);
		aniadirProductoAlPresupuesto();
	});


	$('.form-control').keypress(function(e){

		if(e.charCode == 44){
			return false;
		}

	});
	$(document).on("click", ".btnProductosCalcular", function(e){

		 
		 let productoNombre = $(this).data('data-productosNombre');

		
			console.log(productoNombre);
		
	});


});	

