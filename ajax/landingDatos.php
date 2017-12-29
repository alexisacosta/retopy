<?php
require_once("../conn/clases.php");

	$d = json_encode(landingBtn::datos());

	echo $d;
?>