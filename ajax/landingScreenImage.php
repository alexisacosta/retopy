<?php
require_once("../conn/clases.php");

if (isset($_FILES["subirImageInput"])) {
	$file = $_FILES["subirImageInput"];
	$carpeta = $_POST["carpeta"];
	$nombre = $file["name"]; // nombre de imagen de origen
	$nombreNew = "foto".date("YmdHis");
	$tipo = $file["type"];
	$ext = explode("/", $tipo)[1];
	$ruta_provisional = $file["tmp_name"];
	$size = $file["size"];
	$dimensiones = getimagesize($ruta_provisional);
	$width = $dimensiones[0];
	$height = $dimensiones[1];

	if ($tipo != "image/jpg" && $tipo != "image/jpeg" && $tipo != "image/png" && $tipo != "image/gif") {
		echo "Error, el archivo debe ser JPG, JPEG, PNG o GIF";	
	}else if($size > 1024*1024){
		echo "Error, el tamañó máximo permitido es de 1MB";
	}else if($width != 500 && $height != 300){
		echo "Error, la anchura y la altura mínima permitida es 500 X 300 px";
	}else{
		$src = $carpeta.$nombreNew.".".$ext;
		copy($ruta_provisional, $src);
		echo substr($carpeta,3,strlen($carpeta)-3).$nombreNew.".".$ext;
	}
}
?>