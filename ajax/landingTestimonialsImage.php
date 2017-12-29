<?php
require_once("../conn/clases.php");

if (isset($_FILES["image"])) {
	$file = $_FILES["image"];
	$carpeta = $_POST["carpeta"];
	$id = $_POST["id_landing"];
	$header = $_POST["header"];
	$body = $_POST["body"];
	$footer = $_POST["footer"];
	$nombre = $file["name"]; // nombre de imagen de origen
	$nombreNew = "foto".date("YmdHis");
	$tipo = $file["type"];
	$ext = explode("/", $tipo)[1];
	$ruta_provisional = $file["tmp_name"];
	$size = $file["size"];
	$dimensiones = getimagesize($ruta_provisional);
	$ancho = $dimensiones[0];
	$alto = $dimensiones[1];

	if ($tipo != "image/jpg" && $tipo != "image/jpeg" && $tipo != "image/png" && $tipo != "image/gif") {
		echo "Error, el archivo debe ser JPG, JPEG, PNG o GIF";	
	}else if($size > 1024*1024){
		echo "Error, el tamañó máximo permitido es de 1MB";
	}else if($ancho != 800 && $alto != 800){
		echo "Error, la anchura y la altura mínima permitida es 800 X 800 px";
	}else{
		$src = $carpeta.$nombreNew.".".$ext;
		copy($ruta_provisional, $src);
		$carpInsert = substr($carpeta,3,strlen($carpeta)-3).$nombreNew.".".$ext;
		landingTestimonios::nuevo($id, $carpInsert, $header, $body, $footer);
		$d = landingTestimonios::datos($id);
		$data = "";
		for ($i=0; $i<count($d) ; $i++) { 
		$data .= "<li>
			<h3 class='no-margin-top'>".utf8_encode($d[$i]['header'])."</h3>
			<hr class='bg-blue'>
			<div>
				".utf8_encode($d[$i]['body'])."
			</div>
		</li>";
		}
		echo $data;
	}
}
?>