<?php
require_once("../conn/clases.php");

	$titular = $_GET['titular'];
	$texto = $_GET['texto'];
	$video = explode("=", $_GET['video']);
	$btn = $_GET['btn'];

	landingTitular::nuevo(utf8_decode($titular), utf8_decode($texto), utf8_decode($btn), $video[1]);

	echo landingTitular::ult_registro();
	
?>