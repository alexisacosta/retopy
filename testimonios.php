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


<div class="container mt-3 mb-5 page-testimonios wow fadeInLeft">
	<div class="row">
		<div class="col-sm-6 col-md-8 mb-2">
			<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
				<!-- Loading Screen -->
				<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
					<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="svg/loading/static-svg/spin.svg" />
				</div>
				<div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl1_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl1_99x66.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl2_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl2_99x66.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl3_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl3_99x66.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl4_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl4_99x66.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl5_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl5_99x66.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl6_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl6_99x66.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl7_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl7_99x66.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl8_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl8_99x66.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl9_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl9_99x66.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl10_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl10_99x66.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl11_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl11_99x66.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/testimonios/real/slide/sociohbl13_720x480.jpg" />
						<img data-u="thumb" src="image/testimonios/real/slide/sociohbl13_99x66.jpg" />
					</div>
				</div>
				<!-- Thumbnail Navigator -->
				<div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
					<div data-u="slides">
						<div data-u="prototype" class="p" style="width:99px;height:66px;">
							<div data-u="thumbnailtemplate" class="t"></div>
							<svg viewBox="0 0 16000 16000" class="cv">
								<circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
								<line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
								<line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
							</svg>
						</div>
					</div>
				</div>
				<!-- Arrow Navigator -->
				<div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
					<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
						<circle class="c" cx="8000" cy="8000" r="5920"></circle>
						<polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
						<line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
					</svg>
				</div>
				<div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
				<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					<circle class="c" cx="8000" cy="8000" r="5920"></circle>
					<polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
					<line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
				</svg>
				</div>
			</div>	
			<div class="card bg-dark text-white mt-2 caja-ayuda">
				<div class="card-header text-center">
					"TODO en la vida viene con trabajo duro, disciplina y consistencia"
				</div>
				<div class="card-body text-center">
					<p class="card-text">No permita que alguien robe sus sueños y objetivos. Se paciente con usted mismo, tenga fé y crea en si mismo</p>
				</div>
				<div class="card-footer text-center">
					<a href="#" class="btn btn-success wow fadeInDown">¡Te ayudamos a alcanzar tus metas!</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4 mb-2">
			<div class="card caja-privilegios">
				<img class="card-img-top" alt="Oportunidad negocio herbalife" src="image/ruthyfredy/oportunidanegocio.jpeg">
				<div class="card-body">
					<h4 class="card-title">Privilegios del cliente</h4>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Etrenamiento one to one</li>
					<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Charla motivacional 24/7</li>
					<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Rutina de Entrenamiento</li>
					<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Plan de Comidas</li>
					<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Lista de Compras</li>
					<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Ideas de Bocadillos</li>
				</ul>
			</div>
		</div>
	</div>
	</div>
	
	<hr>
	<div class="container">
		<h3 class="titulo wow lightSpeedIn">Testimonio de Clientes</h3>
	</div>
	<hr>

	<div class="container mt-5">
		
	<div class="caja-testimonios">
		<div class="row py-3 wow slideInLeft">
			<div class="col-md-6 caja-img">
				<img src="image/testimonios/real/fredy.jpg" alt="Testimonio, bajo de peso" class="img-fluid rounded mx-auto d-block">
			</div>
			<div class="col-md-6 caja-text">
				<p>¡Hola! Antes me encontraba con bastante sobre peso, desganado, con malos hábitos alimenticios y una vida sedentaria. Inicie con unos planes que me indico mi Coach y la verdad que fue increíble los cambios que tuve en tan solo un mes de iniciar logre controlar 10 kilos, en los siguientes 2 meses controle un total de 12 kilos, pero lo mejor de todo es que mi composición corporal cambio por completo, baje 20% de grasa corporal y aumente un 16% en masa muscular. Todo esto gracias al sistema de apoyo, las guías y recomendaciones de mi Coach. Felizmente hoy en día llevo una vida activa y saludable</p>
				<p class="text-right">- FREDDY</p>
			</div>
		</div>
		<div class="row py-3 wow slideInRight">
			<div class="col-md-6 caja-img">
				<img src="image/testimonios/real/lourdes.jpg" alt="Testimonio, bajo de peso" class="img-fluid rounded mx-auto d-block">
			</div>
			<div class="col-md-6 caja-text">
				<p>Hola, Soy Lourdes Frutos, Obstetra de profesión, tengo dos hijos, durante mi segundo embarazo subí mucho de peso, quedé con 20 kilos de sobre peso, estaba todo el tiempo cansada, malhumorada y con baja autoestima.</p>
				<p>Gracias a mi Coach, quien me indicó un plan de alimentación y me enseñó a cambiar mis hábitos.</p>
				<p>En el primer mes bajé 5 kilos, disminuyó la grasa corporal y mantuve masa muscular, fue fantástico!!!</p>
				<p>Logré controlar 23 kilos en solo 5 meses y los mantengo hace un año.</p>
				<p>Estoy feliz porque gracias al plan y haberlo hecho en forma volví a ser la persona que era, recuperé mi figura y confianza en mi misma.</p>
				<p class="text-right">- Lourdes</p>
			</div>
		</div>
		<div class="row py-3 wow slideInRight">
			<div class="col-md-6 caja-img">
				<img src="image/testimonios/real/socio2.jpg" alt="Testimonio, bajo de peso" class="img-fluid rounded mx-auto d-block">
			</div>
			<div class="col-md-6 caja-text">
				<p>!Hola¡ Mi nombre es Gladys</p>
				<p>Les comento como me encontraba antes de conocer los productos Herbalife: especialmente con sobrepeso, cansada, con dolor de caveza constante y malos hábitos alimenticios.</p>
				<p>Inicie con unos planes que me indico mi coach y la verdad que fue increible los cambios que tuve en tan poco tiempo. Solo en 22 días de iniciar logre controlar 8 kilos, en 1 mes 15 días controle un total de 10 kilos, pero lo mejor de todo es que mi composición corporal cambio por completo, baje 15% de grasa corporal, aumente masa muscular, más energía y vitalidad.</p>
				<p>Mantengo mi peso mas de un año. Durante este proceso aprendi a tener disciplina conmigo misma. Hoy en día llevo felizmente una vida activa y saludable.</p>
				<p class="text-right">- Gladys</p>
			</div>
		</div>
	</div>

</div>

<?php require_once("pages/footer.php"); ?>

<script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>