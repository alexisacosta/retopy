<?php
require_once("conn/clases.php");
$s = new Session();

if ($s->estadoLogin()) {
	echo'<script language="javascript">window.location="retopy.php"</script>;';
};

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Administrar Reto Py</title>
	<link rel="icon" type="image/png" href="image/logo/logo.png">
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="assets/popper.min.js"></script>
	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/admin.css">
</head>
<body class="logueo">
<div class="container m-5 text-center">
	<img src="image/icono/retopy6.png" alt="Retopy" class="img-fluid w-25">
	<form class="w-25 m-auto px-3 py-2 border rounded">
		<div class="form-group">
			<label for="usuario">Usuario</label>
			<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
		</div>
		<div class="form-group">
			<label for="contrasena">Contraseña</label>
			<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
		</div>
	</form>
	<div class="my-3">
		<button type="button" name="loginsub" id="loginsub" class="btn btn-primary">Ingresar</button>
	</div>
</div>
<div id="error" class="container"></div>
<script type="text/javascript" src="script/admin.js"></script>
</body>
</html>