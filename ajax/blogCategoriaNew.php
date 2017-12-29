<?php
require_once("../conn/clases.php");
	
	$cat = BlogCategoria::categoria();

	$c = $_GET['c'];

	$rep = 0;

	for ($i=0; $i<=count($cat) ; $i++) { 
		if (utf8_encode($cat[$i]['categoria'])==$c) {
			$rep++;
		}
	}

	if ($rep>0) {
		echo "Categoria ya existe en la base de datos...";
	}else{
		BlogCategoria::newCategoria($c);
		echo "Categoria registrada Exitosamente...";		
	}

	
?>