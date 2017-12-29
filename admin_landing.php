<?php
require_once("conn/clases.php");
$s = new Session();
$user = $_SESSION['idpersona'];
$nombre = Persona::nombrePersona($user);

if (!$s->estadoLogin()) {
	echo'<script language="javascript">window.location="admin.php"</script>;';
};

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="icon" type="image/png" href="image/logo/logo.png">
	
	<title>Adm. de Landing</title>
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro.css">
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro-icons.css">
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro-responsive.css">
	<link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
	
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/metro-dist/js/metro.js"></script>
	<script type="text/javascript" src="node_modules/datatables.net/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="bower_components/select2/dist/js/select2.js"></script>
	<script type="text/javascript" src="script/admin.js"></script>


	<style>
		@import url('https://fonts.googleapis.com/css?family=Alegreya+Sans|Lobster|Lobster+Two|Montserrat|Nunito+Sans|Open+Sans|PT+Sans+Narrow|Roboto|Roboto+Mono|Slabo+27px|Source+Sans+Pro|Ubuntu');
		.page-content{
			padding-top: 3.125rem;
			min-height: 100%;
			height: 100%;
		}
	</style>

</head>
<body class="bg-grayLighter">
	<div class="app-bar fixed-top darcula" data-role="appbar">
		<a class="app-bar-element branding" href="retopy.php">RetoPy</a>
		<span class="app-bar-divider"></span>
		<ul class="app-bar-menu">
			<li><a href="retopy.php">Suscriptores</a></li>
			<li><a href="admin_blog.php">Administrar Blog</a></li>
			<li><a href="admin_landing.php">Administrar Landing</a></li>
			<li><a href="admin_page.php">Configuracion Gral</a></li>
		</ul>
		<div class="app-bar-element place-right">
			<span class="dropdown-toggle"><span class="mif-cog"></span>  <?php echo $nombre;?></span>
			<div class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width:220px">
				<ul class="unstyled-list fg-dark">
					<li><a class="fg-dark fg-hover-yellow" onclick="metroDialog.toggle('#DialogChanContra')">Cambiar Contraseña</a></li>
					<hr class="thin bg-gray">
					<li><a class="fg-white1 fg-hover-yellow" id="salir_admin">Salir</a></li>
				</ul>
			</div>
		</div>
		<div data-role="dialog" id="DialogChanContra" class="padding20" data-close-button="true">
			<h5>Cambiar Contraseña</h5>
			<hr class="thin bg-gray">
			<form>
				<div class="input-control text-full-size">
					<input type="text" id="newContra" placeholder="Nueva Contraseña">
				</div>
				<div class="input-control text-full-size">
					<input type="text" id="verContra" placeholder="Verificar Contraseña">
				</div>
			</form>
			<input type="button" class="button success" value="Cambiar Contraseña" id="btnChangeContrasena">
		</div>
	</div>
	<div class="page-content">
		<div class="flex-grid" style="height: 200%;">
			<div class="row" style="height: 200%;">
				<div class="cell" id="cell-sidebar" style="background-color: #71b1d1; height: 100%;">
					<ul class="sidebar">
						<li id="landing_new" style="cursor: pointer;">
							<a>
								<span class="mif-school icon"></span>
								<span class="title">Nueva Landing</span>
								<span class="counter">
									<span class="mif-cloud3"></span>
								</span>
								
							</a>
						</li>
						<li id="landing_edit" style="cursor: pointer;">
							<a>
								<span class="mif-files-empty icon"></span>
								<span class="title">Editar Landing</span>
								<span class="counter">
									<span class="mif-lightning3"></span>
								</span>
							</a>
						</li>
						<li id="landing_adm" style="cursor: pointer;">
							<a>
								<span class="mif-tags icon"></span>
								<span class="title">Administrar Landing</span>
								<span class="counter">
									<span class="mif-weather4"></span>
								</span>
							</a>
						</li>
						<li id="landing_conf" style="cursor: pointer;">
							<a>
								<span class="mif-cog icon"></span>
								<span class="title">Configuraciones</span>
								<span class="counter">
									<span class="mif-rainy"></span>
								</span>
							</a>
						</li>
					</ul>
				</div>

				
				<div class="cell bg-white" style="flex:1;">
					<!--Nueva Landing-->
					<div class="cell-landing-new padding20">
						<h3 class="text-accent">LANDING PAGE EN 6 PASOS <span class="place-right mif-sunrise mif-2x"></span></h3>
						<hr class="thin bg-grayLighter">
						<h2 class="no-margin-top" style="display: inline;">1  </h2><h4 style="display: inline;">Headline</h4>
						<hr class="bg-red">
						<p class="fg-steel">Llamar la atención con un título fuerte y una copia del cuerpo de apoyo, acompañado de un tráiler atractivo o un video de presentación. Deje que los visitantes sepan dónde hacer click en un botón de llamada a la acción grande, llamativo y hermoso</p>
						<form>
							<div class="flex-grid">
								<div class="row flex-just-sb">
									<div class="cell colspan5">
										<label>Titulo Fuerte</label>
										<div class="input-control text full-size">
											<input type="text" id="titular" placeholder="Titulo Fuerte">
										</div>
									</div>
									<div class="cell colspan5">
										<label>Video</label>
										<div class="input-control text full-size">
											<input type="text" id="video" placeholder="https://www.youtube.com/watch?v=5x5hfXDeLk8">
										</div>
									</div>
									<div class="cell colspan2">
										<label>Call to action</label>
										<div class="input-control text full-size">
											<input type="text" id="btn" placeholder="Escribanos">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="cell colspan12">
										<label>Cuerpo de Apollo</label>
										<div class="input-control textarea full-size">
											<textarea id="texto" placeholder="Texto de Apollo"></textarea>
										</div>
									</div>
								</div>
							</div>
						</form>
						<button class="button" id="landingNew"><span class="mif-floppy-disk"></span></button>
						<span data-id="" id="landingR"></span>
						
						<div id="paso_2">
							<hr class="thin bg-grayLighter">	
							<h2 class="no-margin-top" style="display: inline;">2  </h2><h4 style="display: inline;">Call-To-Action</h4>
							<hr class="bg-green">
							<p class="fg-steel">Llamada principal a la landing. Se posiciona a primera vista en la Web Principal</p>
							<form>
								<div class="flex-grid">
									<div class="row flex-just-sb">
										<div class="cell colspan12">
											<label>Boton Llamada de la Web</label>
											<div class="input-control text full-size">
												<input type="text" id="btnWeb" placeholder="Conozca nuestros servicios !!!">
											</div>
										</div>
									</div>
								</div>
							</form>
							<button class="button" id="landingBtnWeb"><span class="mif-floppy-disk"></span></button>
							<span id="landingBtnR"></span>
						</div>

						<div id="paso_3">
							<hr class="thin bg-grayLighter">	
							<h2 class="no-margin-top" style="display: inline;">3  </h2><h4 style="display: inline;">Screenshots (500 x 300 px) Formato: jpg, jpeg, png, gif. Mínimo 6 ScreenShot</h4>
							<hr class="bg-blue">
							<p class="fg-steel">Dar a los visitantes un poco más para babear con sus hermosas capturas de pantalla en el juego</p>
							<div class="flex-grid" id="cargaScreen">
								<div class="row" id="rowScreen">
									<div class="cell">
										<label>Screen</label>
										<div class="input-control">
											<input type="text" disabled value="1" id="screenContador">
										</div>
									</div>
									<div class="cell colspan2">
										<label>Seleccione el Tipo</label>
										<div class="input-control select">
											<select id="screenSelect">
												<option value="0">Tipo</option>
												<option value="1">Imagen</option>
												<option value="2">Texto</option>
											</select>
										</div>
									</div>
									<div class="cell colspan6" id="screenText">
										<label>Escriba su Texto</label>
										<div class="input-control text full-size">
											<input type="text" id="screenTextInput" placeholder="Ingrese un Texto para su Screen">
										</div>
									</div>
									<div class="cell" id="screenColor">
										<label>Texto</label>
										<div class="input-control text full-size">
											<input type="color" id="screenColorInput">
										</div>
									</div>
									<div class="cell" id="screenBg">
										<label>Fondo</label>
										<div class="input-control text full-size">
											<input type="color" id="screenBgInput">
										</div>
									</div>
									<div class="cell colspan8" id="screenImage">
										<label>Seleccione la Imagen</label>
										<form method="post" id="screenImageForm" enctype="multipart/form-data">
											<div class="input-control full-size">
												<input type="file" id="subirImageInput" name="subirImageInput">
												<input type="hidden" name="carpeta" value="../image/landing/screenshots/">
											</div>
										</form>
									</div>
									<div class="cell" id="screenBoton">
									<label> Guardar</label>	
										<div class="input-control">
											<button class="button no-margin-top no-margin-botton"><span class="mif-floppy-disk" id="screenGuardar"></span></button>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="cell colspan12">
										<span id="screenMsg"></span>
									</div>
								</div>
							</div>
						</div>
						
						<div id="paso_4">
							<hr class="thin bg-grayLighter">	
							<h2 class="no-margin-top" style="display: inline;">4  </h2><h4 style="display: inline;">Beneficios</h4>
							<hr class="bg-amber">
							<p class="fg-steel">Muestre los puntos importantes de su venta con bonitos iconos</p>
							

							<form>
							<div class="flex-grid">
								<div class="row">
									<div class="cell colspan5">
										<div class="input-control text full-size">
											<input type="text" id="titBeneficio1" placeholder="Titulo Beneficio 1" class="bg-cyan fg-white">
										</div>
										<div class="input-control textarea full-size">
											<textarea id="desBeneficio1" placeholder="Descripción Beneficio 1"></textarea>
										</div>
									</div>
									<div class="cell colspan5">
										<div class="input-control text full-size">
											<input type="text" id="titBeneficio2" placeholder="Titulo Beneficio 2" class="bg-cyan fg-white">
										</div>
										<div class="input-control textarea full-size">
											<textarea id="desBeneficio2" placeholder="Descripción Beneficio 2"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="cell colspan5">
										<div class="input-control text full-size">
											<input type="text" id="titBeneficio3" placeholder="Titulo Beneficio 3" class="bg-cyan fg-white">
										</div>
										<div class="input-control textarea full-size">
											<textarea id="desBeneficio3" placeholder="Descripción Beneficio 3"></textarea>
										</div>
									</div>
									<div class="cell colspan5">
										<div class="input-control text full-size">
											<input type="text" id="titBeneficio4" placeholder="Titulo Beneficio 4" class="bg-cyan fg-white">
										</div>
										<div class="input-control textarea full-size">
											<textarea id="desBeneficio4" placeholder="Descripción Beneficio 4"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="cell colspan5">
										<div class="input-control text full-size">
											<input type="text" id="titBeneficio5" placeholder="Titulo Beneficio 5" class="bg-cyan fg-white">
										</div>
										<div class="input-control textarea full-size">
											<textarea id="desBeneficio5" placeholder="Descripción Beneficio 5"></textarea>
										</div>
									</div>
									<div class="cell colspan5">
										<div class="input-control text full-size">
											<input type="text" id="titBeneficio6" placeholder="Titulo Beneficio 6" class="bg-cyan fg-white">
										</div>
										<div class="input-control textarea full-size">
											<textarea id="desBeneficio6" placeholder="Descripción Beneficio 6"></textarea>
										</div>
									</div>
								</div>
							</div>
						</form>
						<button class="button" id="landingBtnBeneficios"><span class="mif-floppy-disk"></span></button>
						<span id="landingBenR"></span>
						</div>

						<div id="paso_5">
							<hr class="thin bg-grayLighter">	
							<h2 class="no-margin-top" style="display: inline;">5  </h2><h4 style="display: inline;">Testimonios - Imagen (800 x 800 px) Formato: jpg, jpeg, png, gif. 3 Testimonios</h4>
							<hr class="bg-darkMagenta">
							<p class="fg-steel">Agregue un elemento humano y cierta autoridad con testimonios reales de usuarios reales</p>
							<div class="flex-grid">
								<div class="row">
									<div class="cell colspan6">
										<form method="post" id="testimonioForm" enctype="multipart/form-data">
											<div class="input-control full-size">
												<input type="file" id="image" name="image">
												<input type="hidden" name="carpeta" value="../image/landing/testimonials/">
											</div>
											<div class="input-control text full-size">
												<input type="text" id="header" name="header" placeholder="Titulo">
											</div>
											<div class="input-control textarea full-size">
												<textarea id="body" name="body" placeholder="Descripcion"></textarea>
											</div>
											<div class="input-control text full-size">
												<input type="text" id="footer" name="footer" placeholder="Footer">
											</div>
											<input type="hidden" name="id_landing" id="id_landing">
										</form>
										<button class="button" id="landingBtnTestimonios"><span class="mif-floppy-disk"></span></button>
									</div>
									<div class="cell colspan6">
										<ul class="step-list" id="pasosTestimonios">
											
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div id="paso_6">
							<hr class="thin bg-grayLighter">	
							<h2 class="no-margin-top" style="display: inline;">6  </h2><h4 style="display: inline;">Excelente !!!!! Haz llenado los datos principales de tu landing</h4>
						</div>
					</div>
					<!--Editar Landing-->
					<div class="cell-landing-edit padding20">
						<h3 class="text-accent">Editar Landing <span class="place-right mif-sun mif-2x"></span></h3>
						<hr class="thin bg-grayLighter">
						
					</div>
					<!--Administrar Landing-->
					<div class="cell-landing-adm padding20">
						<h3 class="text-accent">Administrar Landing  <span class="place-right mif-moon mif-2x"></span></h3>
						<hr class="thin bg-grayLighter">
						<table class="table striped hovered datatable" id="tabla_landing">
							<thead>
								<tr>
									<th>#</th>
									<th>Boton Landing</th>
									<th>Fecha Publicación</th>
									<th>Estado</th>
									<th class="align-center">Habilitar</th>
								</tr>
							</thead>
							<tbody id="tAdmLanding"></tbody>
						</table>
					</div>	

					<!--Configurar Landing-->
					<div class="cell-landing-conf padding20">
						<h3 class="text-accent">Configurar Landing  <span class="place-right mif-windy mif-2x"></span></h3>
						<hr class="thin bg-grayLighter">
						<form method="post" id="confGralForm" enctype="multipart/form-data">
							<div class="flex-grid">
								<div class="row flex-just-sa">
									<div class="cell colspan4">
										<label>Fondo Atras: 1600 X 1200 Px</label>
										<div class="input-control text full-size">
											<input type="file" id="bgP_Landing" placeholder="Fondo Primario">
										</div>
									</div>
									<div class="cell colspan2">
										<label>Fondo Frente</label>
										<div class="input-control text full-size">
											<input type="color" id="bgS_Landing" value="#e2f2c5">
										</div>
									</div>
									<div class="cell colspan4">
										<label>Fuente</label>
										<div class="input-control select full-size">
											<select id="font_landing">
												<option value="'Roboto', sans-serif" style="font-family: 'Roboto', sans-serif;">Roboto</option>
												<option value="'Open Sans', sans-serif" style="font-family: 'Open Sans', sans-serif;">Open Sans</option>
												<option value="'Slabo 27px', serif" style="font-family: 'Slabo 27px', serif;">Slabo 27px</option>
												<option value="'Montserrat', sans-serif" style="font-family: 'Montserrat', sans-serif;">Monserrat</option>
												<option value="'Alegreya Sans', sans-serif" style="font-family: 'Alegreya Sans', sans-serif;">Alegreya Sans</option>
												<option value="'Source Sans Pro', sans-serif" style="font-family: 'Source Sans Pro', sans-serif;">Source Sans Pro</option>
												<option value="'Ubuntu', sans-serif" style="font-family: 'Ubuntu', sans-serif;">Ubuntu</option>
												<option value="'PT Sans Narrow', sans-serif" style="font-family: 'PT Sans Narrow', sans-serif;">PT Sans Narrow</option>
												<option value="'Roboto Mono', monospace" style="font-family: 'Roboto Mono', monospace;">Roboto Mono</option>
												<option value="'Nunito Sans', sans-serif" style="font-family: 'Nunito Sans', sans-serif;">Nunito Sans</option>
												<option value="'Lobster', cursive" style="font-family: 'Lobster', cursive;">Lobster</option>
												<option value="'Lobster Two', cursive" style="font-family: 'Lobster Two', cursive;">Lowster Two</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row flex-just-sa">
									<button class="button success" id="landing_btn_conf">Guardar</button>
								</div>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>
				</div>

	<script type="text/javascript">
		$(function(){
			actualizarLandingConf();
			actualizarLandingAdm();
			$("#landing_new").addClass("active");
			$("#landing_edit").removeClass("active");
			$("#landing_adm").removeClass("active");
			$("#landing_conf").removeClass("active");
			$(".cell-landing-new").show();
			$(".cell-landing-edit").hide();
			$(".cell-landing-adm").hide();
			$(".cell-landing-conf").hide();
			$("#paso_2").hide();
			$("#paso_3").hide();
			$("#paso_4").hide();
			$("#paso_5").hide();			
			$("#paso_6").hide();			
			$("#screenText").hide();
			$("#screenColor").hide();
			$("#screenBg").hide();
			$("#screenImage").hide();
			$("#screenBoton").hide();
		})
	</script>
</body>
</html>