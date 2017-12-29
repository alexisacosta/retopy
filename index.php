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
<?php require_once("pages/socialBar.php"); ?>

<div class="container my-2 wow fadeInLeft">	
	<div class="row">
		<div id="carousel1" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel1" data-slide-to="0" class="active"></li>
				<li data-target="#carousel1" data-slide-to="1"></li>
				<li data-target="#carousel1" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="image/ruthyfredy/1152x530/estilodevidaherbalife.jpeg" alt="Estilo de vida, nutricion, salud Herbalife">
					<div class="carousel-caption d-md-bloc">
						<h6 class="mobile">¡NO HAY MEJOR MOMENTO QUE AHORA, PARA COMENZAR A VIVIR UN ESTILO DE VIDA SALUDABLE!</h6>
						<p>El cambio comienza contigo</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="image/ruthyfredy/1152x530/vidasanaherbalife.jpeg" alt="Estilo de vida, nutricion, salud Herbalife">
					<div class="carousel-caption d-md-bloc">
						<h6 class="mobile">LE AYUDAMOS A DISFRUTAR DE UNA VIDA ACTIVA Y SALUDABLE</h6>
						<p>El éxito es la suma de pequeños esfuerzos repetidos día tras día</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="image/ruthyfredy/1152x530/tiempolibreherbalife.jpeg" alt="Estilo de vida, nutricion, salud Herbalife">
					<div class="carousel-caption d-md-bloc">
						<h6 class="mobile">LA ACTIVIDAD FÍSICA GENERA EXCELENTES BENEFICIOS CORPORALES, MENTALES Y EMOCIONALES</h6>
						<p>Nunca es demasiado tarde para cambiar tu vida</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="index-presentacion my-5 wow fadeInLeft">
			<div class="card">
				<div class="card-body text-justify">
					<p>¡Bienvenido a nuestro mundo!</p>
					<p>¡Hola a todos! Somos Freddy & Ruth!</p>
					<p>Compartimos un estilo de vida activo y saludable con el propósito de inspirarte y motivarte a ser mejor. Nos gusta rodearnos de nada más que la posividad, así que solo buena onda por favor.</p>
					<p><strong>¡Esperamos que disfrutes de nuestro sitio y esperamos conectarnos muy pronto contigo!</strong></p>
				</div>
				<div class="card-footer text-center">
					<a href="pages/testimonios.php" class="btn btn-success" type="button">¡Mira estos increibles resultados!</a>
				</div>
			</div>
		</div>	
	</div>	
</div>

<div class="container mb-3">
	<div class="row">
		<div class="index-entrenamiento">
			<div class="card-deck">
				<div class="card wow bounceInLeft">
					<div class="card-body card-uno">
						<h2 class="card-title">Te gustaría sentirte bien</h2>
						<p class="card-text">Con nuestro plan de comidas y rutina de entrenamiento, garantizamos tu exito.</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Etrenamiento one to one</li>
						<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Charla motivacional 24/7</li>
						<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Rutina de Entrenamiento</li>
						<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Plan de Comidas</li>
						<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Lista de Compras</li>
						<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Ideas de Bocadillos</li>
					</ul>
					<div class="card-footer text-center">
						<a href="pages/contactenos.php" class="btn btn-success">Contactanos</a>
					</div>
				</div>
				<div class="card wow bounceInRight">
					<a href="pages/oportunidad.php">
						<img src="image/ruthyfredy/82c19aa2-65c4-4e24-96b0-6a77aa4a530a.jpeg" alt="Oportunidad de Negocio" class="card-img-top">
					</a>
					<div class="card-body">
						<h4 class="card-title">Oportunidad de Negocio</h4>
						<p class="card-text">¿Estás cansado de trabajar para otros y quieres ser tu propio jefe con la flexibilidad que tú prefieras? ¿Quieres complementar tus ingresos actuales, conseguir algo de dinero extra para este mes o a largo plazo? No estás solo</p>
					</div>
					<div class="card-footer text-center">
						<a href="pages/oportunidad.php" class="btn btn-success">Conozca más...</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container wow fadeInLeft index-motivacion my-2 py-5">
	<div class="row">
		<div class="col-xl-8 col-lg-7 col-md-6">
			<h3 class="text-center titulo">
				Resultados Garantizados
			</h3>
			<p class="text-center">Entendemos cuán importante es un círculo de influencia y por eso tenemos una increíble comunidad en línea llena de personas positivas y empoderantes con los mismos objetivos que usted que lo apoyarán. Nos divertimos mucho, creamos desafíos , conocemos a los nuevos miembros del equipo y nos inspiramos en los resultados de todos, e inspiramos a los demás con los suyos.</p>
			<div id="carousel2" class="carousel slide mt-2" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="image/testimonios/real/fredy.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/testimonios/real/ruth.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/testimonios/real/socio1.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/testimonios/real/socio2.jpg" alt="Fours slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>
		</div>
		<div class="col-xl-4 col-lg-5 col-md-6">
			<div class="text-center my-5">
				<a href="#" class="btn btn-success btn-evaluacion wow swing" type="button" data-toggle="modal" data-target="#modal-evaluacion">Evaluación gratuita de bienestar!!</a>
				
				<!-- Modal -->
			<div class="modal fade" id="modal-evaluacion" tabindex="-1" role="dialog" aria-labelledby="modal-evaluacion-label" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modal-evaluacion-label">¡Solicita tu evalución Gratuita!</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group row">
									<label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="nombre_evaluacion" placeholder="Nombre">
									</div>
								</div>
								<div class="form-group row">
									<label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="apellido_evaluacion" placeholder="Apellido">
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-sm-2 col-form-label">Email</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="email_evaluacion" placeholder="Email">
									</div>
								</div>
								<div class="form-group row">
									<label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="telefono_evaluacion" placeholder="Telefono">
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<button type="button" class="btn btn-primary" id="btnRegistro_evaluacion">SOLICITAR!!!</button>
						</div>
					</div>
				</div>
			</div>


			</div>
			<div class="my-5 suscribirblog">
				<h3 class="text-center titulo">¡¡Suscribite a nuestro Blog!!</h3>
				<p class="text-center">Regístrese con su nombre y dirección de correo electrónico para recibir noticias y actualizaciones diarias sobre nuestro blog. ¡Espero verte pronto!</p>
				<p class="text-center firma">Freddy & Ruth</p>
				<form>
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre_blog" placeholder="Nombre">
					</div>
					<div class="form-group">
						<label for="apellido">Apellido</label>
						<input type="text" class="form-control" id="apellido_blog" placeholder="Apellido">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email_blog" placeholder="Email" aria-describedby="emailHelp">
						<small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
					</div>
				</form>
				<div class="text-center">
					<button type="button" class="btn btn-primary" id="btnRegistro_blog">Suscribir</button>
				</div>
			</div>
			<div class="text-center my-5 wow jello">
				<a href="https://www.facebook.com/NutriClubhbl/" target="_blank"><img src="image/iconoredes/FB1.png" alt="Facebook" class="img-fluid"></a>
			</div>
		</div>
	</div>
</div>

<div class="container index-contactanos text-center my-5 wow fadeInLeft">
	<div class="row">
		<div class="card border-light mb-3">
			<div class="card-body">
				<a href="pages/contactenos.php" class="btn btn-dark btn-lg px-5" type="button">Contacta con FREDDY y RUTH</a>
			</div>
		</div>
	</div>
</div>

<div class="container my-5 wow fadeInLeft">
	<div class="row">
		<div class="index-cambio text-center">
			<h1 class="display-4">¡EL CAMBIO COMIENZA CON VOS!</h1>
			<a href="#" class="btn btn-success btn-lg" type="button" data-toggle="modal" data-target="#modal-cambio">Comienza tu viaje!</a>
			
			<!-- Modal -->
			<div class="modal fade" id="modal-cambio" tabindex="-1" role="dialog" aria-labelledby="modal-cambio-label" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modal-cambio-label">¡Comienza tu viaje!</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group row">
									<label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="nombre_cambio" placeholder="Nombre">
									</div>
								</div>
								<div class="form-group row">
									<label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="apellido_cambio" placeholder="Apellido">
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-sm-2 col-form-label">Email</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="email_cambio" placeholder="Email">
									</div>
								</div>
								<div class="form-group row">
									<label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="telefono_cambio" placeholder="Telefono">
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<button type="button" class="btn btn-primary" id="btnRegistro_cambio">QUIERO CAMBIAR</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once("pages/footer.php"); ?>

	<script type="text/javascript">
		$(function(){
			$(".banner").click(function(){
				window.location.replace("landing.php");
			})
		})
	</script>
</body>
</html>
