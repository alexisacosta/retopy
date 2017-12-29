<?php
require_once("../conn/clases.php");
	$fecha = getdate();
	$f = $fecha['year']."-".$fecha['mon']."-".$fecha['mday'];

	$n = $_POST['nombre_sus'];
	$a = $_POST['apellido_sus']; 
	$e = $_POST['email_sus']; 
	$t = $_POST['tel_sus'];
	$c = utf8_decode($_POST['com_sus']);
	$d = is_null($_POST['dep_sus']) ? 0 : $_POST['dep_sus'];
	$ciu = $_POST['ciu_sus'];
	$edad = $_POST['edad_sus'];
	$g = $_POST['gen_sus'];
	$enc = $_POST['enc_sus'];
	$i = $_POST['int_sus'];

	Suscripciones::ingreso($n, $a, $e, $t, $c, $d, $ciu, $edad, $g, $enc, $i, $f);
	echo "Sus datos han sido registrados Exitosamente. Nos comunicaremos con Ústed lo antes posible";
?>