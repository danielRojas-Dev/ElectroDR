$(BuscarDatos());

function BuscarDatos(consulta){

	$.ajax({
		url: 'php/resultado_filtrador.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta) {
		$("#datos").html(respuesta);
	})

}

	$(document).on('keyup', '#buscador', function(){

		var valorBusqueda =$(this).val();
		if(valorBusqueda != ""){
			BuscarDatos(valorBusqueda);

		}else{

			BuscarDatos();
		}

});
