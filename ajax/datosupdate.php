<?php
require_once("../conn/clases.php");
	$n = utf8_decode($_POST['n']);
	$s = utf8_decode($_POST['s']); 
	$e1 = utf8_decode($_POST['e1']); 
	$e2 = utf8_decode($_POST['e2']);
	$t1 = utf8_decode($_POST['t1']);
	$t2 = utf8_decode($_POST['t2']);
	$f = utf8_decode($_POST['f']);
	$t = utf8_decode($_POST['t']);
	$i = utf8_decode($_POST['i']);
	$d = utf8_decode($_POST['d']);

	DatosPagina::datosUpdate($n, $s, $e1, $e2, $t1, $t2, $f, $t, $i, $d);
?>