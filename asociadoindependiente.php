<?php  
require_once("../conn/clases.php");
$dpto = Departamento::departamento();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="Estamos muy dedicados al éxito de otros, ya sea su aptitud o economía, hemos creado un sistema de presupuesto amigable que alienta a las personas a comenzar su viaje de pérdida de peso con confianza, porque garantizamos resultados.">
	<meta name="author" content="Alexis Acosta">
	<link rel="icon" type="image/png" href="../image/logo/logo.png">
	<title>RetoPy</title>
	<link href="https://fonts.googleapis.com/css?family=Chela+One|Nunito|Open+Sans|Roboto+Mono" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../node_modules/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../node_modules/animate.css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/iconmoon/font.css">
	<link rel="stylesheet" type="text/css" href="../styles/main.css">
</head>
<body>
<!-- .................................................. -->
<!-- Marca -->
<div class="container-fluid barra_1 mt-2 mb-2">
	<div class="row align-items-center">
		<div class="col-3 col-sm-4 col-md-3 col-lg-3 marca">
			<h1>retopy</h1>
		</div>
		<div class="col-5 col-sm-4 col-md-3 col-lg-4 text-center redes">
			<div class="row header-social">
				<div class="col-3 col-sm-2 offset-sm-2 col-md-1 offset-md-4 text-center">
					<div>
						<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-3 col-sm-2 col-md-1 text-center">
					<div>
						<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-3 col-sm-2 col-md-1 text-center">
					<div>
						<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-3 col-sm-2 col-md-1 text-center">
					<div>
						<i class="fa fa-envelope-square fa-2x" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-4 col-sm-4 col-md-3 col-lg-2 text-center fono">
			<i class="fa fa-phone-square fa-lg" aria-hidden="true"></i>
			<a href="tel://+595982731536">+595 982 731536</a>
		</div>
		<div class="col-md-3 col-lg-3 text-center email">
			<i class="fa fa-envelope" aria-hidden="true"></i>
			<a href="mailto:fredy.dure@gmail.com?subject=Consulta">fredy.dure@gmail.com</a>
		</div>
	</div>
</div>


<!-- Menu de Navegación -->

<div class="container-fluid barra_2">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark menu-principal">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="../index.php">Bienvenido</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="team.php">Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="testimonios.php">Testimonios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="blog.php">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contactenos.php">Contactenos</a>
				</li>
				<li class="nav-item dropdown active">
					<a href="#" role="button" class="nav-link dropdown-toggle" id="dropmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oportunidad de Negocio</a>
					<div class="dropdown-menu" aria-labelledby="dropmenu">
						<a href="oportunidad.php" class="dropdown-item">Oportunidad de Negocio</a>
						<a href="asociadoindependiente.php" class="dropdown-item">¿Queres ser Asociado Independiente?</a>
						<div class="dropdown-divider"></div>
						<a href="clavesdelexito.php" class="dropdown-item">Las claves del éxito del negocio independiente</a>
						<a href="beneficios.php" class="dropdown-item">Beneficios del Asociado Independiente</a>
					</div>	
				</li>
			</ul>
		</div>
	</nav>
</div>

<!-- _________________________________________________________________________________ -->

<div class="container my-2 wow fadeInLeft" id="page-oportunidad">
	<div class="social-bar">
		<a href="#" class="icon icon-facebook2" target="_blank"></a>
		<a href="#" class="icon icon-twitter" target="_blank"></a>
		<a href="#" class="icon icon-instagram" target="_blank"></a>
		<a href="#" class="icon icon-whatsapp" target="_blank"></a>
		<a href="#" class="icon icon-mail4" target="_blank"></a>
	</div>
	<div class="row">
		<div class="col-11 col-sm-11 col-md-4 col-lg-3 mb-2">
			<ul class="nav flex-column nav-pills">
				<li class="nav-item">
					<a href="oportunidad.php" class="nav-link">Oportunidad de Negocio</a>
				</li>
				<li class="nav-item">
					<a href="asociadoindependiente.php" class="nav-link active">¿Queres ser asociado independiente?</a>
				</li>
				<li class="nav-item">
					<a href="clavesdelexito.php" class="nav-link">Las claves del éxito del negocio independiente</a>
				</li>
				<li class="nav-item">
					<a href="beneficios.php" class="nav-link">Beneficios del Asociado independiente</a>
				</li>
			</ul>
		</div>
		<div class="col-11 col-sm-11 col-md-8 col-lg-9 mb-2">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Contacta con Nosotros</h4>
					<h6 class="card-subtitle mb-2 text-muted">Únete a miles de Asociados independientes y ayúdanos a cambiar positivamente la vida de las personas, ¡promovamos juntos una nutrición balanceada y un estilo de vida activo!</h6>
					<p class="card-text">Los productos Herbalife son vendidos exclusivamente a través de Asociados Independientes y NO están disponibles en tiendas. Ya sea que te interese conocer más sobre los productos o el negocio independiente, llena el formulario y en breve serás contactado por un Asociado Independiente que te proporcionará la información que necesites.</p>
					<hr>
					<form>
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label for="nombre">Nombre:</label>
								<input type="text" class="form-control" placeholder="Ingresa tu nombre" required style="text-transform: uppercase;" name="nombre" id="nombre">
							</div>
							<div class="col-md-6 form-group">
								<label for="apellido">Apellido:</label>
								<input type="text" class="form-control" placeholder="Ingresa tu apellido" required style="text-transform: uppercase;" name="apellido" id="apellido">
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" placeholder="Ingresa tu correo electrónico" required style="text-transform: uppercase;" name="email" id="email">
							</div>
							<div class="col-md-6 form-group">
								<label for="telefono">Telefono:</label>
								<input type="text" class="form-control" placeholder="Ingresa tu número de teléfono" required style="text-transform: uppercase;" name="telefono" id="telefono">
							</div>
						</div>
						<hr>
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label for="dpto">Departamento:</label>
								<select name="dpto" id="dpto" class="form-control" style="text-transform: uppercase;">
									<option value="0">Selecciona tu departamento</option>
									<?php 
									for ($i=0; $i<=count($dpto);$i++) { 
									?>
									<option value="<?php echo utf8_encode($dpto[$i]['id']);?>">
										<?php echo utf8_encode($dpto[$i]['departamento']);?> 
									</option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="col-md-6 form-group">
								<label for="ciudad">Ciudad:</label>
								<input type="text" class="form-control" placeholder="Ingresa tu ciudad" required style="text-transform: uppercase;" name="ciudad" id="ciudad">
							</div>
						</div>
						<hr>
						<div class="form-row">
							<div class="col-sm-6 form-group">
								<label for="edad">Tu edad:</label>
								<select name="edad" id="edad" class="form-control" style="text-transform: uppercase;">
									<option value="0">Selecciona una opción</option>
									<option value="18-24">18-24 años</option>
									<option value="25-34">25-34 años</option>
									<option value="35-44">35-44 años</option>
									<option value="45-54">45-54 años</option>
									<option value="+55">+55 años</option>
								</select>
							</div>
							<div class="col-sm-6 form-group">
								<label for="">Genero:</label><br>
								<div class="py-1">
									<label class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" name="genero" id="generoH" value="Hombre">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Hombre</span>
									</label>
									<label class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" name="genero" id="generoM" value="Mujer">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Mujer</span>
									</label>
								</div>
							</div>
						</div>
						<hr>
						<div class="form-row">
							<div class="col-11 col-sm-8 col-md-6 form-group">
								<label for="encuesta">¿Cómo te enteraste?</label>
								<select name="encuesta" id="encuesta" class="form-control" style="text-transform: uppercase;">
									<option value="">Selecciona una opción</option>
									<option value="Búsqueda en la Web">Búsqueda en la Web</option>
									<option value="Evento deportivo">Evento deportivo</option>
									<option value="Familia / Amigos">Familia / Amigos</option>
									<option value="Paneles vía pública">Paneles vía pública</option>
									<option value="Publicidad en TV/RADIO">Publicidad en TV/RADIO</option>
									<option value="Revistas, periódicos">Revistas, periódicos</option>
									<option value="Volantes, pósters, afiches">Volantes, pósters, afiches</option>
									<option value="Publicidad online">Publicidad online</option>
									<option value="Redes sociales">Redes sociales</option>
									<option value="Otro">Otro</option>
								</select>
							</div>
						</div>
						<hr>
						<button type="button" class="btn btn-primary">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<footer class="mt-5 wow fadeInLeft">
	<div class="container-fluid">
		<div class="row footer-social py-3">
			<div class="col-3 col-sm-2 offset-sm-2 col-md-1 offset-md-4 text-center">
				<div class="social">
					<i class="fa fa-facebook-square fa-4x" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-3 col-sm-2 col-md-1 text-center">
				<div class="social">
					<i class="fa fa-twitter-square fa-4x" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-3 col-sm-2 col-md-1 text-center">
				<div class="social">
					<i class="fa fa-instagram fa-4x" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-3 col-sm-2 col-md-1 text-center">
				<div class="social">
					<i class="fa fa-envelope-square fa-4x" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div class="row footer-menu py-3">
			<div class="col">
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<a href="../index.php" class="nav-link">Bienvenido</a>
					</li>
					<li class="nav-item">
						<a href="team.php" class="nav-link">Team</a>
					</li>
					<li class="nav-item">
						<a href="testimonios.php" class="nav-link">Testimonios</a>
					</li>
					<li class="nav-item">
						<a href="blog.php" class="nav-link">Blog</a>
					</li>
					<li class="nav-item">
						<a href="contactenos.php" class="nav-link">Contactenos</a>
					</li>
					<li class="nav-item">
						<a href="oportunidad.php" class="nav-link">Oportunidad de Negocio</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row footer-contacto py-2">
			<div class="col text-center">
				<a href="mailto:fredy.dure@gmail.com?subject=Consulta">FREDYDURE@GMAIL.COM</a>
			</div>
		</div>
		<div class="row">
			<div class="col footer-copy text-center py-2">
				<i class="fa fa-copyright" aria-hidden="true"></i> Todos los derechos reservados - 2017
			</div>
		</div>
		<hr>
		<div class="row mb-5">
			<div class="col footer-desarrollo text-center px-2">
				Desarrollado por: 
				<br>
				<a href="mailto:alexis.acosta.1984@gmail.com?subject=Servicios Web">Alexis Acosta</a>, +595 981 200-061
			</div>
		</div>
	</div>
</footer>




	<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/popper.min.js"></script>
	<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../node_modules/wow.js/dist/wow.min.js"></script>	
	<script type="text/javascript" src="../script/main.js"></script>
</body>
</html>