<?php
require_once("../conn/clases.php");

	$id = $_GET['id'];
	$idEdo = $_GET['idEdo'];

	if ($idEdo == 1) {
		BlogCategoria::chanCategoria($id, 2);
	}else{
		BlogCategoria::chanCategoria($id, 1);
	}

	
?>