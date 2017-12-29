<?php
require_once("conn/clases.php");
$s = new Session();
$user = $_SESSION['idpersona'];
$nombre = Persona::nombrePersona($user);
$interes = Interes::interes();

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
	
	<title>Panel de Administración</title>
	
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro.css">
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro-icons.css">
	<link rel="stylesheet" type="text/css" href="node_modules/datatables.net-dt/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="node_modules/metro-dist/css/metro-responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.12.1.custom/jquery-ui.min.css">
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/datatables.net/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="bower_components/select2/dist/js/select2.min.js"></script>
	<script type="text/javascript" src="node_modules/metro-dist/js/metro.js"></script>
	<script type="text/javascript" src="assets/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script type="text/javascript" src="script/admin.js"></script>

	<style>
		.page-content{
			padding-top: 3.125rem;
			min-height: 100%;
			height: 100%;
		}
		#tabla_suscriptores{
			font-size: 0.7rem !important;
		}
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
	<div class="page-content">
		<div class="flex-grid no-responsive-future" style="height: 100%;">
			<div class="row" style="height: 100%;">
				<div class="cell auto-size padding20" id="cell-content">
					<hr class="thin bg-grayLighter">
					<h1 class="text-light bg-grayLighter padding5">Detalle de Suscripciones</h1>
					<hr class="thin bg-grayLighter">
					
					<div class="flex-grid bg-darkCyan">
						<div class="row flex-align-center flex-just-sa">
							<div class="cell">
								<select id="select" class="input-control">
									<option value="0">Todos</option>
									<?php
									for ($i=0; $i<=count($interes); $i++) { 
									?>
										<option value="<?php echo $interes[$i]["id"];?>"><?php echo utf8_encode($interes[$i]["interes"]);?></option>
									<?php
									}
									?>
								</select>			
							</div>
							<div class="cell">
								<input type="text" id="datepicker" placeholder="Fecha" class="input-control fecha">
							</div>
							<div class="cell">
								<button class="button info text-shadow" id="quitarfiltros">Quitar Filtros</button>
							</div>
						</div>
					</div>

					<hr class="thin bg-grayLighter">
					
					<div class="bg-grayLighter fg-grayDarker padding10">
						<table id="tabla_suscriptores" class="datable border bordered">
							<thead>
								<tr>
									<th>Id</th>
									<th class="sortable-column sort-asc">Nombre</th>
									<th class="sortable-column">Apellido</th>
									<th class="sortable-column">Email</th>
									<th class="sortable-column">Telefono</th>
									<th class="sortable-column">comentario</th>
									<th class="sortable-column">departamento</th>
									<th class="sortable-column">ciudad</th>
									<th class="sortable-column">edad</th>
									<th class="sortable-column">genero</th>
									<th class="sortable-column">encuesta</th>
									<th class="sortable-column">interes</th>
									<th class="sortable-column" style="width: 30px;">fecha</th>
								</tr>
							</thead>
							<tbody id="tBody">
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
			$("#datepicker").datepicker({
				dateFormat: "yy-mm-dd"
			});
			$.ajax({
				type: "GET",
				url: "ajax/detalleSusc.php",
				data:{
					id: $("#select").val(),
					fecha: ""
				},
				success: function(data){
					$("#tBody").append(data);
					$("#tabla_suscriptores").DataTable();
				}
			})
			$("#quitarfiltros").click(function(){
				location.reload();
			})
	</script>
</body>
</html>