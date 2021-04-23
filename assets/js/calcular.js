	

	$(document).on("click", ".btnProductosCalcular", function(e){
		e.preventDefault();



		let productoNombre = e.target.getAttribute("data-productosNombre");
		let productoPrecio = e.target.getAttribute("data-productosPrecio");
		let productoDescripcion = e.target.getAttribute("data-descripcionNombre");

		let cantProducto = 0;
		
		while(true){
			cantProducto = parseInt(prompt("Ingrese la cantidad de productos: "));

			if(!isNaN(cantProducto) && cantProducto != null && cantProducto != "" && cantProducto > 0 && Number.isInteger(parseInt(cantProducto))){
				break;
			}else if(!cantProducto){
				return;
			}else{	
				alert('Ingrese un numero valido para las cantidades del producto!');
				continue;
			}
		}
		



	
	
