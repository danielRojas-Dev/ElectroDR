$(document).ready(function(){
		    var maxField = 10; //Maximo de inputs

		    var addButton = $('.add_button'); //Boton de añadir

		    var wrapper = $('.field_wrapper'); //Div wrapper

		    var fieldHTML = '<div><input required class="form-control" type="text" name="respuestas[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="fa fa-trash"></i></a></div>'; //New input field html 
		    var x = 1; //Se inicializa mi variable x en 1
		    
		    $(addButton).click(function(){ //Cuando se hace click en el boton, ejecuta una funcion anonima
		        if(x < maxField){ // Si x es menor a mi maximo de inputs
		            x++; //Increment field counter
		            $(wrapper).append(fieldHTML); // Se añade el input al div
		        }else{
		        	alert('Ya se alcanzo el maximo de respuestas posibles!');
		        }
		    });
		    $(wrapper).on('click', '.remove_button', function(e){ //Si se hace click en boton de remover
		    	e.preventDefault();
		    	var resp = confirm('¿Esta seguro de borrar esta respuesta?');
		        if (resp == 1) {
		        	$(this).parent('div').remove(); //Se remueve el input al que se le a hecho click
		        	x--; //Se decrementa mi variable x en 1
		        }
		    });
		});