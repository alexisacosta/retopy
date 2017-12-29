<?php
require_once("../conn/clases.php");

	$id = $_GET['id'];
	$tipo = $_GET['tipo'];
	$content = $_GET['content'];
	$cf = $_GET['cf'];
	$ct = $_GET['ct'];

	landingScreenShots::nuevo($id, $tipo, utf8_decode($content), $cf, $ct);

	echo landingScreenShots::screen_cant_Landing($id);
?>