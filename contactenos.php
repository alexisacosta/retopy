<?php
require_once("conn/clases.php");
$datos = DatosPagina::datos();
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
<?php
require_once("pages/headPrincipal.php");
require_once("pages/headLibreria_1.php")
?>
<!-- Incluir librerias propias de la pagina -->

<!-- ...................................... -->
</head>

<body>

<?php require_once("pages/header.php"); ?>

<div class="container my-2 wow fadeInLeft" id="page-contactenos">
	<div class="row justify-content-center mb-3">
		<div class="col-9 mb-3">
			<form class="px-5 py-2">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="nombre">Nombre:</label>
						<input type="text" class="form-control form-control-lg" id="nombre" required>
					</div>
					<div class="form-group col-md-6">
						<label for="apellido">Apellido:</label>
						<input type="text" class="form-control form-control-lg" id="apellido" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="email">Email:</label>
						<input type="email" class="form-control form-control-lg" id="email" aria-describedby="emailHelp"  required>
						<small id="emailHelp" class="form-text text-muted">No compartiremos su correo electronico con nadie mas.</small>
					</div>
					<div class="form-group col-md-6">
						<label for="telefono">Telefono:</label>
						<input type="text" class="form-control form-control-lg" id="telefono" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="departamento">Departamento:</label>
						<input type="text" class="form-control form-control-lg" id="departamento" required>
					</div>
					<div class="form-group col-md-6">
						<label for="ciudad">Ciudad:</label>
						<input type="text" class="form-control form-control-lg" id="ciudad" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="edad">Edad:</label>
						<input type="text" class="form-control form-control-lg" id="edad" required>
					</div>
					<div class="form-group col-md-4">
						<label for="genero">Genero:</label>
						<input type="text" class="form-control form-control-lg" id="genero" required>
					</div>
					<div class="form-group col-md-4">
						<label for="encuesta">Encuesta:</label>
						<input type="text" class="form-control form-control-lg" id="encuesta" required>
					</div>
				</div>
				<dvi class="form-row">
					<div class="form-group col-md-12">
						<label for="nota">Que le interesa?</label>
						<textarea class="form-control" id="nota" rows="3"></textarea>
					</div>
				</dvi>				
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>
	</div>
</div>

<?php require_once("pages/footer.php"); ?>

</body>
</html>