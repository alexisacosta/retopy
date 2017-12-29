<?php
require_once("../conn/clases.php");

	$id = $_GET['id'];
	$idEdo = $_GET['idEdo'];

	if ($idEdo == 1) {
		BlogArticulo::chanEdoNota($id, 2);
	}else{
		BlogArticulo::chanEdoNota($id, 1);
	}
?>