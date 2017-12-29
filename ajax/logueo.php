<?php
require_once("../conn/clases.php");
	$user = $_POST['usuario'];
	$pass = $_POST['contrasena'];

	$session = new Session();
	$session->inicioLogin($user,$pass);
?>