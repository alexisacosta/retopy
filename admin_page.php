<?php
require_once("conn/clases.php");
$s = new Session();
$user = $_SESSION['idpersona'];
$nombre = Persona::nombrePersona($user);

$d = DatosPagina::datos();

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
	
	<title>Adm. de Página</title>
	
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro.css">
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro-icons.css">
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro-responsive.css">
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/metro-dist/js/metro.js"></script>
	<script type="text/javascript" src="script/admin.js"></script>

	<style>
		
	</style>

</head>
<body class="bg-white">
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
	<div class="padding40 no-padding-left no-padding-right no-padding-botton">
		<div class="grid">
			<div class="row cells12">
				<div class="cell offset2 colspan7">
					<h1 class="block-shadow bg-steel fg-white padding20">Datos del Negocio</h1>
					<hr class="thin bg-gray">
				</div>				
			</div>
			<div class="row cells12">
				<div class="cell offset2 colspan7">
					<div class="row cells2 bg-grayLighter padding5">
						<div class="cell">
							<label>Nombre de Empresa:</label>
							<div class="input-control text success full-size">
								<input type="text" id="nombre" value="<?php echo utf8_encode($d[1]);?>">
							</div>	
						</div>
						<div class="cell">
							<label>Slogan:</label>
							<div class="input-control text success full-size">
								<input type="text" id="slogan" value="<?php echo utf8_encode($d[2]);?>">
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="row cells12">
				<div class="cell offset2 colspan7">
					<div class="row cells2 bg-grayLighter padding5">
						<div class="cell">
							<label>Email Primario:</label>
							<div class="input-control text full-size">
								<input type="email" id="email1" value="<?php echo utf8_encode($d[3]);?>">
							</div>	
						</div>
						<div class="cell">
							<label>Email Secundario</label>
							<div class="input-control text full-size">
								<input type="email" id="email2" value="<?php echo utf8_encode($d[4]);?>">
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="row cells12">
				<div class="cell offset2 colspan7">
					<div class="row cells2 bg-grayLighter padding5">
						<div class="cell">
							<label>Teléfono Principal:</label>
							<div class="input-control text full-size">
								<input type="text" id="tel1" value="<?php echo utf8_encode($d[5]);?>">
							</div>	
						</div>
						<div class="cell">
							<label>Teléfono Secundario:</label>
							<div class="input-control text full-size">
								<input type="text" id="tel2" value="<?php echo utf8_encode($d[6]);?>">
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="row cells12">
				<div class="cell offset2 colspan7">
					<div class="row cells3 bg-grayLighter padding5">
						<div class="cell">
							<label>Facebook:</label>
							<div class="input-control text full-size">
								<input type="text" id="face" value="<?php echo utf8_encode($d[7]);?>">
							</div>	
						</div>
						<div class="cell">
							<label>Twitter:</label>
							<div class="input-control text full-size">
								<input type="text" id="twit" value="<?php echo utf8_encode($d[8]);?>">
							</div>	
						</div>
						<div class="cell">
							<label>Instagran:</label>
							<div class="input-control text full-size">
								<input type="text" id="insta" value="<?php echo utf8_encode($d[9]);?>">
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="row cells12">
				<div class="cell offset2 colspan7  bg-grayLighter padding5">
					<hr class="thin bg-gray">
						<h5>Descargo de Resultados</h5>
						<div class="input-control textarea full-size">
							<textarea id="descargo"><?php echo utf8_encode($d[10]);?></textarea>
						</div>	
					<hr class="thin bg-gray">
				</div>
			</div>	
			<div class="row cells12">
				<div class="cell offset2 colspan7 bg-grayLighter padding5">
					<input type="button" value="Actualizar" id="actualizar_de">
				</div>
			</div>
		</div>
	</div>
</body>
</html>