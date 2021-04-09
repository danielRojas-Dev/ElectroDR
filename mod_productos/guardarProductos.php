<?php 

// var_dump($_POST);
require_once '../conexion/conexion.php';

$nombre_producto = $_POST['nombre_producto'];
$desc_produc = $_POST['desc_produc'];
$img_produc = $_FILES['img_produc'];
$precio_produc = $_POST['precio_produc'];
$marca = $_POST['marca'];
$negocio = $_POST['negocio'];

try {
	

// Recibo los datos de la imagen
	$nombre_img = "imagen_".date("dmYHis") .".". pathinfo($img_produc['name'],PATHINFO_EXTENSION);
	$tipo = $img_produc['type'];
	$tamano = $img_produc['size'];

//Si existe imagen y tiene un tamaño correcto
	if ($nombre_img == !NULL && $img_produc['size'] <= 500000){
   //indicamos los formatos que permitimos subir a nuestro servidor
		if (($img_produc["type"] == "image/pdf")
			|| ($img_produc["type"] == "image/jpeg")
			|| ($img_produc["type"] == "image/jpg")
			|| ($img_produc["type"] == "image/png")){
      // Ruta donde se guardarán las imágenes que subamos
			$directorio = '../assets/img/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
		$result_subida = move_uploaded_file($img_produc['tmp_name'],$directorio.$nombre_img);

		if ($result_subida) {
			// si se subio el archivo con exito
			// var_dump(array('estado' => true,'mensaje' => $directorio.$nombre_img));
			$rutaImg = $directorio.$nombre_img; 
			$sql_negocios = "INSERT INTO `productos`(`nombre`, `desc_produc`, `ruta_img`, `precio`, `fecha_modificacion`, `id_negocio`, `id_marca`) VALUES ('$nombre_producto', '$desc_produc', '$rutaImg', '$precio_produc', NOW(), '$marca', '$negocio')";

			$result_negocios = $conexion->query($sql_negocios);

			// mensaje_alerta("Error al subir al archivo");

		}else{
			// si hubo algun error al subir el archivo
			mensaje_alerta("Error al subir al archivo");
			
		}
	}else{
       //si no cumple con el formato
		mensaje_alerta("No se puede subir una imagen con ese formato");
		
	}
}else{
   //si existe la variable pero se pasa del tamaño permitido
	if($nombre_img == !NULL){
		mensaje_alerta("La imagen es demasiado grande");
	}
}

} catch (Exception $e) {

	mensaje_alerta("Error al guardar el negocio, por favor verifique!");

}

mensaje_alerta("Producto agregado correctamente!");


function mensaje_alerta($arg_mensaje){
	echo"<script type=\"text/javascript\">
	alert(\"$arg_mensaje\"); 
	self.location =\"index.php\";
	</script>"; 
}
?>