<div class="container" id="header">
	<!-- Banner -->
	<div class="row banner py-2 mb-2 justify-content-center">
			<h5 class="p-2 m-0">PROMO ESPECIAL DEL MES???</h5>
	</div>
	<!-- Marca -->
	<div class="row align-items-center menuB">
		<div class="col-12 col-md-3 col-lg-3 brand_menu">
			<span class="brand"><?php echo utf8_encode($datos[1]); ?></span>
			<span class="slogan"><?php echo utf8_encode($datos[2]); ?></span>
		</div>
		<div class="col-12 col-md-9 col-lg-9 contact_menu">
			<div class="row">
				<div class="col-2 col-sm-2 col-md-2 col-lg-2 blog_menu">
					<a class="nav-link" href="pages/blog.php">Blog</a>
				</div>
				<div class="col-lg-2 redes_menu">
					<!-- Facebook -->
					<?php
					if ($datos[7]!="") {
					?>
					<a href="<?php echo utf8_encode($datos[7]); ?>" target="_blank">
						<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
					</a>
					<!-- Twitter -->
					<?php
					}
					if ($datos[8]!="") {
					?>
						<a href="<?php echo utf8_encode($datos[8]); ?>" target="_blank">
							<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
						</a>
					<?php
					}
					// Instragram
					if ($datos[9]!="") {
					?>
					<a href="<?php echo utf8_encode($datos[9]); ?>" target="_blank">
						<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
					</a>
					<?php
					}
					?>
				</div>
				<div class="col-7 col-sm-5 col-md-5 col-lg-4 tel_menu">
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="<?php echo utf8_encode($datos[5]); ?>"><?php echo utf8_encode($datos[5]); ?></option>
							<option value="<?php echo utf8_encode($datos[6]); ?>"><?php echo utf8_encode($datos[6]); ?></option>
						</select>
					</div>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-4 mail_menu">
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="<?php echo utf8_encode($datos[3]); ?>"><?php echo utf8_encode($datos[3]); ?></option>
							<option value="<?php echo utf8_encode($datos[4]); ?>"><?php echo utf8_encode($datos[4]); ?></option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Barra de navegacion -->
	<div class="row">
		<nav class="navbar navbar-expand-sm navbar-light bg-light w-100 menup">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto w-100 justify-content-around">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">
							Bienvenido
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="team.php">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="testimonios.php">Testimonios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contactenos.php">Contactenos</a>
					</li>
					<li class="nav-item dropdown">
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
</div>