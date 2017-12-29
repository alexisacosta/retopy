<?php
	require_once("conn/clases.php");
	$datos = DatosPagina::datos();
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="Estamos muy dedicados al éxito de otros, ya sea su aptitud o economía, hemos creado un sistema de presupuesto amigable que alienta a las personas a comenzar su viaje de pérdida de peso con confianza, porque garantizamos resultados.">
	<meta name="author" content="Alexis Acosta">
	<link rel="icon" type="image/png" href="image/logo/logo.png">
	<title>RetoPy</title>
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="assets/popper.min.js"></script>
	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/jssor.slider.min.js"></script>

	<style type="text/css" media="screen">
		@import url('https://fonts.googleapis.com/css?family=Alegreya+Sans|Lobster|Lobster+Two|Montserrat|Nunito+Sans|Open+Sans|PT+Sans+Narrow|Roboto|Roboto+Mono|Slabo+27px|Source+Sans+Pro|Ubuntu');
		/* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
        .jssorb057 .i:hover .b {stroke-opacity:.7;}
        .jssorb057 .iav .b {stroke-opacity: 1;}
        .jssorb057 .i.idn {opacity:.3;}

        .jssora073 {display:block;position:absolute;cursor:pointer;}
        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
        .jssora073:hover {opacity:.8;}
        .jssora073.jssora073dn {opacity:.4;}
        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
        body{
        	background-image: url(image/bg/backgroundHBL.jpeg);
        	background-size: 100%;
        	background-position: center;
        	background-repeat: no-repeat;
        	background-attachment: fixed;
        	font-family: 'Montserrat', sans-serif;
        }
        .navbar-brand{
        	text-align: center;
        }
        .titulo_brand{
			font-family: 'Lobster', cursive;
			font-size: 36px;
			display: block;
        }
        .titulo_slogan{
			font-size: 12px;
			display: block;
        }
        @media (max-width: 575px) {
        	.navbar-nav{
        		flex-direction: row-reverse;
        	}
        	.navbar-nav .nav-link{
        		padding-right: 12px;	
        	}
        }
	</style>
</head>
<body>
<div class="container" style="background-color: #e2f2c5;">
	<div class="row">
		<nav class="navbar navbar-expand-sm navbar-dark w-100 fixed-top pt-0" style="background-color:#69c100;">
			<a href="#" class="navbar-brand pt-0 pb-0">
				<span class="titulo_brand"><?php echo utf8_encode($datos[1]);?></span> 
				<span class="titulo_slogan">
					<?php echo utf8_encode($datos[2]);?>
				</span>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-espanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a href="index.php" class="nav-link">Web</a>
					</li>
				</ul>
				<ul class="navbar-nav">
					<?php 
						if($datos[7] != ""){
					?>
						<li class="nav-item">
							<a href="<?php echo $datos[7]; ?>" class="nav-link" target="_blank">
								<i class="fa fa-facebook-square fa-2x" aria-hidden="true" style="color: #fff;"></i>
							</a>
						</li>	
					<?php
					}
					if($datos[9] != ""){
					?>
					<li class="nav-item">
						<a href="<?php echo $datos[9]; ?>" class="nav-link" target="_blank">
							<i class="fa fa-instagram fa-2x" aria-hidden="true" style="color:#fff;"></i>
						</a>
					</li>
					<?php
					}
					if($datos[8] != ""){
					?>
					<li class="nav-item">
						<a href="<?php echo $datos[8]; ?>" class="nav-link" target="_blank">
							<i class="fa fa-twitter-square fa-2x" aria-hidden="true" style="color: #fff;"></i>
						</a>
					</li>
					<?php
					}
					?>
				</ul>
			</div>
		</nav>
	</div>
	<br><br><br>
	<div class="row my-5">
		<div class="col">
			<h1>Lorem ipsum</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas illum veritatis harum repellendus, facilis aspernatur.</p>
			<button type="button" class="btn btn-success btn-lg">Call-to-action</button>
		</div>
		<div class="col">
			<div class="embed-responsive embed-responsive-21by9">
			 	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QeihuEParqE" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<hr>
	<div class="row my-5">
		<div class="col">
			<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
				<!-- Loading Screen -->
				<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
					<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="svg/loading/static-svg/spin.svg" />
				</div>
				<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">
					<div>
						<img data-u="image" src="image/landing/screenshots/500x300_1.png" />
					</div>
					<div>
						<img data-u="image" src="image/landing/screenshots/500x300_2.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/landing/screenshots/500x300_3.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/landing/screenshots/500x300_4.jpg" />
					</div>
					<div>
						<img data-u="image" src="image/landing/screenshots/500x300_5.gif" />
					</div>
					<div>
						<img data-u="image" src="image/landing/screenshots/500x300_6.jpg" />
					</div>
					<div style="background-color:#ff7c28;">
						<div style="position:absolute;top:3px;left:16px;width:150px;height:62px;z-index:0;font-size:16px;color:#000000;line-height:24px;text-align:left;padding:5px;box-sizing:border-box;">
							El resultado que espera y donde quiera...
						</div>
					</div>
				</div>
				<!-- Bullet Navigator -->
				<div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
					<div data-u="prototype" class="i" style="width:16px;height:16px;">
						<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
							<circle class="b" cx="8000" cy="8000" r="5000"></circle>
						</svg>
					</div>
				</div>
				<!-- Arrow Navigator -->
				<div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
					<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
						<path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
					</svg>
				</div>
				<div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
					<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
						<path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row my-5">
		<div class="col">
			<div class="card-columns">
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-body">
			      <h4 class="card-title">Card title that wraps to a new line</h4>
			      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			    </div>
			  </div>
			  <div class="card p-3">
			    <blockquote class="blockquote mb-0 card-body">
			      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			      <footer class="blockquote-footer">
			        <small class="text-muted">
			          Someone famous in <cite title="Source Title">Source Title</cite>
			        </small>
			      </footer>
			    </blockquote>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-body">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card bg-primary text-white text-center p-3">
			    <blockquote class="blockquote mb-0">
			      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
			      <footer class="blockquote-footer">
			        <small>
			          Someone famous in <cite title="Source Title">Source Title</cite>
			        </small>
			      </footer>
			    </blockquote>
			  </div>
			  <div class="card text-center">
			    <div class="card-body">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img" src="..." alt="Card image">
			  </div>
			  <div class="card p-3 text-right">
			    <blockquote class="blockquote mb-0">
			      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			      <footer class="blockquote-footer">
			        <small class="text-muted">
			          Someone famous in <cite title="Source Title">Source Title</cite>
			        </small>
			      </footer>
			    </blockquote>
			  </div>
			  <div class="card">
			    <div class="card-body">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row my-5">
		<div class="col">
			<div class="card-group">
			  <div class="card">
			    <img class="card-img-top" src="image/testimonios/real/socio1.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h4 class="card-title">Soy Andrea</h4>
			      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="image/testimonios/real/socio2.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="image/testimonios/real/" alt="Card image cap">
			    <div class="card-body">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	<div class="row mt-1 py-2 bg-secondary">
		<div class="col">
			<h5 class="m-0 py-2 text-light">
				Registrate para recibir actualizaciones por Email
			</h5>
		</div>
		<div class="col">
			<form>
				<div class="form-row align-items-center">
					<div class="col-auto">
						<label class="sr-only" for="email">Email</label>
						<div class="input-group mb-2 mb-sm-0">
							<div class="input-group-addon">@</div>
							<input type="text" class="form-control" id="email" placeholder="Dirección Email">
						</div>
					</div>
					<div class="col-auto">
						<button type="button" class="btn btn-light">Registrar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row py-4 text-dark justify-content-center" style="background-color:#69c100;">
		<div class="col text-center">
			<a href="pages/contactenos.php" style="color: blue;">Pongase en Contacto con Nosotros</a>
		</div>
		<div class="col text-center">
			<a data-toggle="modal" data-target="#responsabilidad" style="color: #fff; font-style: none; cursor: pointer;">Descargo de Responsabilidad</a>
		</div>
		<div class="modal fade" id="responsabilidad" tabindex="-1" role="dialog" aria-labelledby="tituloresponsabilidad" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="tituloresponsabilidad">Descargo de Responsabilidad</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body text-justify">
						<p><?php echo utf8_encode($datos[10]); ?></p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<script type="text/javascript">
	$(document).ready(function(){
		var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 5,
              $Align: 390,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
	})
</script>
</body>
</html>