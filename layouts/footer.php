<script src="../lib/jquery/jquery.min.js"></script>
		<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="../lib/datatables/js/jquery.dataTables.min.js"></script>
		<script src="../lib/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="../lib/datatables/js/dataTables.responsive.min.js"></script>
		<script src="../lib/datatables/js/responsive.bootstrap4.min.js"></script>
		<!-- <script src="../assets/js/scrolling-nav.js"></script> -->
		
		<script>
			$(document).ready(function() {
				var dataTable = $('#myTable').DataTable( {

					"language":	{
						"sProcessing":     "Procesando...",
						"sLengthMenu":     "Mostrar _MENU_ registros",
						"sZeroRecords":    "No se encontraron resultados",
						"sEmptyTable":     "Ningún dato disponible en esta tabla",
						"sInfo":           "Registros del _START_ al _END_  de _TOTAL_ registros",
						"sInfoEmpty":      "Registros del 0 al 0 registros",
						"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
						"sInfoPostFix":    "",
						"sSearch":         "Buscar:",
						"sUrl":            "",
						"sInfoThousands":  ",",
						"sLoadingRecords": "Cargando...",
						"oPaginate": {
							"sFirst":    "Primero",
							"sLast":     "Último",
							"sNext":     "Siguiente",
							"sPrevious": "Anterior"
						},
						"oAria": {
							"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
							"sSortDescending": ": Activar para ordenar la columna de manera descendente"
						}
					},
					responsive: true
				// dom: 'Bfrtip',
				// 	buttons: [
				// 	'copyHtml5',
				// 	'excelHtml5',
				// 	'csvHtml5',
				// 	'pdfHtml5'
				// 	]



			} );
			} );
			$(document).on('click', '.close', function(){
				$('.alert').hide();
			});
		</script>

	</body>
	</html>