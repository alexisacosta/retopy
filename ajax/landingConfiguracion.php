<?php
require_once("../conn/clases.php");

if ($_POST['tipo'] == "Actualizar") {
	$d = landingConfiguracion::dato();
	echo json_encode($d);
}

?>