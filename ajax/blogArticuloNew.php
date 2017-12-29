<?php
require_once("../conn/clases.php");

	$bc = $_POST['bc'];
	$bt = $_POST['bt'];
	$ba = $_POST['ba'];
	$bd = $_POST['bd'];
	$texto= $_POST['texto'];

	$new = BlogArticulo::articuloNew($bc, $bt, $ba, $bd, $texto);

	echo $new;
	
?>