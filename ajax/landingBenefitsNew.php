<?php
require_once("../conn/clases.php");

	$id = $_GET['id'];
	$h1 = $_GET['h1'];
	$b1 = $_GET['b1'];
	$h2 = $_GET['h2'];
	$b2 = $_GET['b2'];
	$h3 = $_GET['h3'];
	$b3 = $_GET['b3'];
	$h4 = $_GET['h4'];
	$b4 = $_GET['b4'];
	$h5 = $_GET['h5'];
	$b5 = $_GET['b5'];
	$h6 = $_GET['h6'];
	$b6 = $_GET['b6'];

	if ($h1 != "" && $b1 != "") {
		landingBenefits::nuevo($id, utf8_decode($h1), utf8_decode($b1));
	}
	
	if ($h2 != "" && $b2 != "") {
		landingBenefits::nuevo($id, utf8_decode($h2), utf8_decode($b2));
	}
	
	if ($h3 != "" && $b3 != "") {
		landingBenefits::nuevo($id, utf8_decode($h3), utf8_decode($b3));
	}
	
	if ($h4 != "" && $b4 != "") {
		landingBenefits::nuevo($id, utf8_decode($h4), utf8_decode($b4));
	}
	
	if ($h5 != "" && $b5 != "") {
		landingBenefits::nuevo($id, utf8_decode($h5), utf8_decode($b5));
	}
	
	if ($h6 != "" && $b6 != "") {
		landingBenefits::nuevo($id, utf8_decode($h6), utf8_decode($b6));
	}

?>