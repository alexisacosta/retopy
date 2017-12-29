<?php
require_once("../conn/clases.php");

	$id = $_GET['id'];
	$btn = $_GET['n'];

	landingBtn::nuevo($id,utf8_decode($btn));
	
?>