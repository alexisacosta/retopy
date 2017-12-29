<?php
require_once("conn/clases.php");
$datos = DatosPagina::datos();
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
<?php
require_once("pages/headPrincipal.php");
require_once("pages/headLibreria_2.php")
?>
<!-- Incluir librerias propias de la pagina -->

<!-- ...................................... -->
</head>

<body>

<?php require_once("pages/header.php"); ?>
<?php require_once("pages/socialBar.php"); ?>

<div class="container my-3 page-team wow fadeInLeft">
	 <div id="jssor_1">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin">
            <img src="svg/loading/static-svg/spin.svg" />
        </div>
        <div data-u="slides" class="jssor_slides">
            <div>
                <img data-u="image" src="image/team/teamreto1.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/team/teamreto2.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/team/teamreto3.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/team/teamreto4.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/team/teamreto5.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/team/teamreto6.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i">
                <svg viewBox="0 0 16000 16000" class="svg">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssorb051 arrowleft" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" class="svg">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssorb051 arrowright" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" class="svg">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
</div>

<div class="container wow fadeInLeft">
	<div class="card text-white bg-dark">
		<div class="card-header">
			Acerca de nosotros
		</div>
		<div class="card-body text-justify">
			<h3>¿Quienes somos?</h3>
			<p>¡Una pareja comprometida a ayudar a otros a a lograr sus objetivos y cambiar sus vidas!</p>
			<p>Somos Freddy & Ruth, una joven pareja con un hijo cariñoso y una vida que gira en torno a la familia. Lo que hacemos es simple. Enseñamos a personas de todo el mundo sobre una nutrición adecuada y los inspiramos a vivir un estilo de vida saludable y activo.</p>
			<p>Como un equipo de marido y mujer, nuestro objetivo es conectarnos con nuestros miembros a nivel personal y estamos literalmente allí para apoyarlo todo el día. Esto en muchos casos conduce a resultados increíbles de personas que camban su etilo de vida.</p>
			<p>Nos encanta lo que hacemos. ¡Es quien somos!</p>
			<p>¡Comencemos tu transformación! ¡Contáctenos para comenzar!</p>
		</div>
		<div class="card-footer text-center">
			<a href="contactenos.php" class="btn btn-light">Contactenos</a>  
		</div>
	</div>
</div>

<?php require_once("pages/footer.php"); ?>

	<script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>