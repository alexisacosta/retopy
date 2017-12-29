<?php
require_once("conn/clases.php");
$s = new Session();
$user = $_SESSION['idpersona'];
$nombre = Persona::nombrePersona($user);

$c = BlogCategoria::categoria();

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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro.css">
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro-icons.css">
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro-responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/editor/css/editor.css">
	<link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
	
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="node_modules/metro-dist/js/metro.js"></script>
	<script type="text/javascript" src="node_modules/datatables.net/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="assets/editor/js/editor.js"></script>
	<script type="text/javascript" src="bower_components/select2/dist/js/select2.js"></script>
	<script type="text/javascript" src="script/admin.js"></script>


	<style>
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
		<div class="flex-grid" style="height: 120%;">
			<div class="row" style="height: 120%;">
				<div class="cell" id="cell-sidebar" style="background-color: #71b1d1; height: 100%;">
					<ul class="sidebar">
						<li id="articulo_new" style="cursor: pointer;">
							<a>
								<span class="mif-school icon"></span>
								<span class="title">Nuevo Articulo</span>
								<span class="counter">
									<span class="mif-cloud3"></span>
								</span>
								
							</a>
						</li>
						<li id="articulo_up" style="cursor: pointer;">
							<a>
								<span class="mif-files-empty icon"></span>
								<span class="title">Administrar Articulos</span>
								<span class="counter">
									<span class="mif-lightning3"></span>
								</span>
							</a>
						</li>
						<li id="categoria_up" style="cursor: pointer;">
							<a>
								<span class="mif-tags icon"></span>
								<span class="title">Categorias</span>
								<span class="counter">
									<span class="mif-weather4"></span>
								</span>
							</a>
						</li>
					</ul>
				</div>

				
				<div class="cell bg-white" style="flex:1;">
					<!--Nuevo Articulo-->
					<div class="cell-articulo-new padding20">
						<h3 class="text-accent">Escribir Articulo <span class="place-right mif-stack"></span></h3>
					<hr class="thin bg-grayLighter">
					<button type="button" class="button rounded paso1" id="grabar_blog">Grabar</button>
						<form id="form_articulo" class="paso1">
							<div class="grid">
								<div class="row">
									<div class="cell colspan2">
										<select class="input-control select full-size" id="blogCategoria">
											<option value="0">Categoria</option>
											<?php
											for ($i=0; $i < count($c); $i++) { 
												if ($c[$i]['id_estado'] == 1) {
											?>
												<option value="<?php echo $c[$i]['id']; ?>"><?php echo utf8_encode($c[$i]['categoria']); ?></option>
											<?php

												}
											}
											?>
										</select>
									</div>
									<div class="cell colspan6">
										<input type="text" class="input-control text full-size" id="blogTitulo" placeholder="Titulo del Blog" required>
									</div>
									<div class="cell">
										<input type="text" class="input-control text full-size" id="blogAutor" disabled value="<?php echo $nombre;?>" data-user="<?php echo $_SESSION['idpersona']; ?>">
									</div>
									<div class="cell colspan2">
										<input type="date" class="input-control text full-size" id="blogDate" disabled value="<?php echo date('Y-n-j'); ?>">
									</div>
								</div>
							</div>
							<div class="input-control">
								<textarea id="txt-content"></textarea>
							</div>
						</form>
						<form method="post" id="formImage" enctype="multipart/form-data" class="paso2">
							<div class="form-group">
								<label for="subirImage">Subir Imagen Para la Nota</label>
								<input type="file" class="form-control-file" id="subirImage" aria-describedby="fileHelp" name="fileImage">
								<small id="fileHelp" class="form-text text-muted">Formato: jpg, jpeg, png, gif. Tamaño Máx: 1Mb. Anchura y Altura Max: 500px. Anchura y Altura Min: 60px</small>
							</div>
							<hr class="thin bg-gray">
						</form>
						<button type="button" class="btn btn-default" id="btnCancelarSubida" class="paso2">Cancelar</button>
						<button type="button" class="btn btn-primary" id="btnsubirImage" class="paso2">SubirImagen</button>
					</div>
					<!--Adinistrar Articulo-->
					<div class="cell-articulo-adm padding20">
						<h3 class="text-accent">Adinistrar Notas Blog <span class="place-right mif-lamp"></span></h3>
						<hr class="thin bg-grayLighter">
						<table class="dataTable border bordered" data-auto-width="false" id="tabla-Blog">
							<thead>
								<tr>
									<th>Id</th>
									<th class="sortable-column">Titulo Blog</th>
									<th class="sortable-column">Categoría</th>
									<th class="sortable-column">Autor</th>
									<th class="sortable-column">Publicación</th>
									<th class="sortable-column">Estado</th>
									<th style="width: 20px"></th>
								</tr>
							</thead>
							<tbody id="tbody-notas-blog"></tbody>
						</table>
					</div>
					<!--Adinistrar Categoria-->
					<div class="cell-categoria padding20">
						<h3 class="text-accent">Administrar Categorias  <a class="cycle-button place-right"><span class="mif-plus" onclick="metroDialog.toggle('#newDialogCategoria')"></span></a></h3>
						<div data-role="dialog" id="newDialogCategoria" class="padding20" data-close-button="true">
							<h5>Categoria Nueva</h5>
							<hr class="thin bg-gray">
							<form>
								<div class="input-control text-full-size">
									<input type="text" id="newCategoria">
								</div>
							</form>
							<input type="button" value="Registrar" id="btnnewCategoria">
						</div>
						<hr class="thin bg-grayLighter">
						<table class="dataTable border bordered" data-auto-width="false" id="tabla-Categoria">
							<thead>
								<tr>
									<th>Id</th>
									<th class="sortable-column">Categoria</th>
									<th class="sortable-column">Estado</th>
									<th style="width: 20px"></th>
								</tr>
							</thead>
							<tbody id="tbody-Categoria"></tbody>
						</table>
					</div>	
				</div>
			</div>
		</div>
				</div>

	<script type="text/javascript">
		$(function(){
			$("#articulo_new").addClass("active");
			$("#articulo_up").removeClass("active");
			$("#categoria_up").removeClass("active");
			$(".cell-articulo-new").show();
			$(".cell-articulo-adm").hide();
			$(".cell-categoria").hide();
			$("#txt-content").Editor();
			$(".paso1").show();
			$(".paso2").hide();
		})
	</script>
</body>
</html>