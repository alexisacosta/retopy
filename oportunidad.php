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

<div class="container my-2 wow fadeInLeft" id="page-oportunidad">
	<div class="row">
		<div class="col-11 col-sm-11 col-md-4 col-lg-3 mb-2">
			<ul class="nav flex-column nav-pills">
				<li class="nav-item">
					<a href="oportunidad.php" class="nav-link active">Oportunidad de Negocio</a>
				</li>
				<li class="nav-item">
					<a href="asociadoindependiente.php" class="nav-link">¿Queres ser asociado independiente?</a>
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
					<h4 class="card-title">Oportunidad de negocio con Herbalife</h4>
					<h6 class="card-subtitle mb-2 text-muted">Herbalife tiene una oportunidad de negocio como Asociado Independiente</h6>
					<p class="card-text">Además de ayudarte a sentir y lucir fantástico gracias a la mejor nutrición, Herbalife te brinda la oportunidad de negocio de convertirte en un Asociado Independiente de sus productos, ofreciéndote construir tu propio negocio y alcanzar la libertad financiera que todos desean.</p>
					<p class="card-text">Desde hace 30 años, la Oportunidad de Negocio Herbalife ha llenado de éxito la vida de miles de personas en el mundo, brindándoles atractivos ingresos y mayor libertad de tiempo para disfrutar de la vida.</p>
					<p class="card-text">Con un sólido y generoso Plan de Mercado, un sistema de entrenamiento continuo y eficaces herramientas de negocio que te brinda la compañía, podrás, paso a paso, incrementar tus ingresos trabajando a tiempo parcial o dedicándote por entero a tu negocio, la decisión está en tus manos.</p>
					<p class="card-text">Desde tu inicio como Asociado Independiente de Herbalife, recibirás todo el reconocimiento y recompensa por tu esfuerzo, con atractivas promociones inolvidables, escapadas y experiencias de lujo que podrás disfrutar a medida que cumplas tus metas de negocio.</p>
					<p class="card-text">Diseña tu proyecto de vida con Herbalife, construye tu propia red de Asociados Independientes y desarrolla un negocio sólido que asegure tu futuro financiero y el de los tuyos.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once("pages/footer.php"); ?>
</body>
</html>