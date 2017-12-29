$(document).ready(function(){
	/*Inicio Sesion*/
	$("#loginsub").click(function(){
		$.ajax({
			type: "POST",
			url: "ajax/logueo.php",
			data: {
				usuario: $("#usuario").val(),
				contrasena: $("#contrasena").val()
			},
			success: function(data){
				if (data === "Login") {
					window.location.replace("retopy.php");
				}else{
					$("#error").html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Datos incorrectos!</strong> Por favor verifique sus datos.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				}
			}
		})
	});
	/*Cerrar Sesion*/
	$("#salir_admin").click(function(){
		$.ajax({
			type: "POST",
			url: "ajax/deslogueo.php",
			data:{},
			success: function(data){
				location.reload();
			}
		})
	});
	
	/*Datos de Suscriptores*/

	$("#select").change(function(){
		var fecha = $(".fecha").datepicker("getDate");
		var d = fecha == null ? "" : fecha.format('yyyy-mm-dd');
		$.ajax({
			type: "GET",
			url: "ajax/detalleSusc.php",
			data:{
				id: $("#select").val(),
				fecha: d
			},
			success: function(data){
				$("#tBody").empty(data);
				$("#tBody").append(data);
				$("#tabla_suscriptores").DataTable();
			}
		})
	})

	$(".fecha").change(function(){
		var fecha = $(this).datepicker("getDate"); 
		var d = fecha == null ? "" : fecha.format('yyyy-mm-dd');
		$.ajax({
			type: "GET",
			url: "ajax/detalleSusc.php",
			data:{
				id: $("#select").val(),
				fecha: d
			},
			success: function(data){
				$("#tBody").empty();
				$("#tBody").append(data);
				$("#tabla_suscriptores").DataTable();
			}
		})
	})

	$("#actualizar_de").click(function(){
		var n = $("#nombre").val();
		var s = $("#slogan").val();
		var e1 = $("#email1").val();
		var e2 = $("#email2").val();
		var t1 = $("#tel1").val();
		var t2 = $("#tel2").val();
		var f = $("#face").val();
		var t = $("#twit").val();
		var i = $("#insta").val();
		var d = $("#descargo").val();

		$.ajax({
			type: "POST",
			url: "ajax/datosupdate.php",
			data:{
				n: n,
				s: s,
				e1: e1,
				e2: e2,
				t1: t1,
				t2: t2,
				f: f,
				t: t,
				i: i,
				d: d
			},
			success: function(data){
				alert("Registros Actualizados con Exito...");
				location.reload();
				//console.log(data);
			}
		})
	})

	$("#btnnewCategoria").click(function(){
		$.ajax({
			type: "GET",
			url: "ajax/blogCategoriaNew.php",
			data: {
				c: $("#newCategoria").val()
			}, 
			success: function(data){
				alert(data);
				actualizarCategoria();
				$("#newDialogCategoria").hide();
			}
		})	
	})

	$("#articulo_new").click(function(){
		$(this).addClass("active");
		$("#articulo_up").removeClass("active");
		$("#categoria_up").removeClass("active");
		$(".cell-articulo-new").show();
		$(".cell-articulo-adm").hide();
		$(".cell-categoria").hide();
	});

	$("#articulo_up").click(function(){
		actualizarNotasBlog();
		$(this).addClass("active");
		$("#articulo_new").removeClass("active");
		$("#categoria_up").removeClass("active");
		$(".cell-articulo-new").hide();
		$(".cell-articulo-adm").show();
		$(".cell-categoria").hide();	
	});

	$("#categoria_up").click(function(){
		actualizarCategoria();
		$(this).addClass("active");
		$("#articulo_new").removeClass("active");
		$("#articulo_up").removeClass("active");

		$(".cell-articulo-new").hide();
		$(".cell-articulo-adm").hide();
		$(".cell-categoria").show();

	});

	$("#grabar_blog").click(function(){
		var bc = $("#blogCategoria").val();
		var bt = $("#blogTitulo").val();
		var ba = $("#blogAutor").attr("data-user");
		var bd = $("#blogDate").val();
		var texto = $(".Editor-editor").html();

		if (bc == 0 || bt == "") {
			alert("Por favor seleccione una categoria y un Titulo para su Blog");
		}else{
			if (texto == "") {
				alert("No ha introducido ninguna entrada para su Blog");
			}else{
				$.ajax({
					type: "POST",
					url: "ajax/blogArticuloNew.php",
					data: {
						bc: bc,
						bt: bt,
						ba: ba,
						bd: bd,
						texto: texto
					},
					success: function(data){
						$("#subirImage").attr("data-id-blog",data);
						$("#blogCategoria").val("");
						$("#blogTitulo").val("");
						$(".Editor-editor").html("");
						alert("Datos Registrados Exitosamente");
						$(".paso1").hide();
						$(".paso2").show();
					}
				})
			}
		}
	})

	$("#btnCancelarSubida").click(function(){
		location.reload();
	})

	$("#btnsubirImage").click(function(){
		var formData = new FormData($("#formImage")[0]);
		var ruta = "ajax/blogArticuloImageNew.php";
		var idBlog = $("#subirImage").attr("data-id-blog");
		$.ajax({
			url: ruta,
			type: "POST",
			data: formData,
			contentType: false,
			processData: false, 
			success: function(data){
				$.ajax({
					url: "ajax/blogImageAct.php",
					type: "POST",
					data: {
						url: data,
						id: idBlog
					},
					success: function(data){
						if (data == "ok") {
							alert("Imagen subida exitosamente");
							location.reload();
						}else{
							alert("No fue posible subir la imagen");
						}
					}
				})
			}
		})
	})

	$("#btnChangeContrasena").click(function(){
		var nuevo = $("#newContra").val();
		var verifica = $("#verContra").val();

		if (nuevo != verifica) {
			alert("Contraseñas no coinciden");
		}else if (nuevo == "" || verifica == ""){
			alert("Campos Vacios");
		}else{
			$.ajax({
				type: "POST",
				url: "ajax/chanContrasena.php",
				data:{
					c: nuevo
				},
				success: function(data){
					alert("Contraseña actualizada con Exito");
					location.reload();
					//alert(data);
				}
			})
		}

	})

	/*landing*/

	$("#landing_new").click(function(){
		$(this).addClass("active");
		$("#landing_edit").removeClass("active");
		$("#landing_adm").removeClass("active");
		$("#landing_conf").removeClass("active");
		$(".cell-landing-new").show();
		$(".cell-landing-edit").hide();
		$(".cell-landing-adm").hide();
		$(".cell-landing-conf").hide();
	});

	$("#landing_edit").click(function(){
		$(this).addClass("active");
		$("#landing_new").removeClass("active");
		$("#landing_adm").removeClass("active");
		$("#landing_conf").removeClass("active");
		$(".cell-landing-new").hide();
		$(".cell-landing-edit").show();
		$(".cell-landing-adm").hide();
		$(".cell-landing-conf").hide();
	});

	$("#landing_adm").click(function(){
		$(this).addClass("active");
		$("#landing_new").removeClass("active");
		$("#landing_edit").removeClass("active");
		$("#landing_conf").removeClass("active");
		$(".cell-landing-new").hide();
		$(".cell-landing-edit").hide();
		$(".cell-landing-adm").show();
		$(".cell-landing-conf").hide();
	});
	$("#landing_conf").click(function(){
		$(this).addClass("active");
		$("#landing_new").removeClass("active");
		$("#landing_edit").removeClass("active");
		$("#landing_adm").removeClass("active");
		$(".cell-landing-new").hide();
		$(".cell-landing-edit").hide();
		$(".cell-landing-adm").hide();
		$(".cell-landing-conf").show();

	});

	$("#landingNew").click(function(){
		if ($("#titular").val()=="" || $("#texto").val()=="" || $("#video").val()=="" || $("#btn").val()=="") {
			alert("Por favor llene todos los campos");
		}else{
		$.ajax({
			type: "GET",
			url: "ajax/landingNew.php",
			data: {
				titular: $("#titular").val(),
				texto: $("#texto").val(),
				video: $("#video").val(),
				btn: $("#btn").val()
			},
			success: function(data){
				$("#landingR").attr("data-id",data);
				$("#id_landing").val(data);
				$("#landingR").html("Landing Nro: "+data+"  "+"<span class='mif-thumbs-up mif-ani-bounce'></span>");
				$("#landingNew").attr("disabled",true);
				$("#titular").attr("disabled", true);
				$("#texto").attr("disabled", true);
				$("#video").attr("disabled", true);
				$("#btn").attr("disabled", true);
				$("#paso_2").show();
			}
		})	
		}
		
	})

	$("#landingBtnWeb").click(function(){
		if ($("#btnWeb").val() == "") {
			alert("Por favor ingrese un nombre");
		}else{
			$.ajax({
				type: "GET",
				url: "ajax/landingBtnWeb.php",
				data: {
					n: $("#btnWeb").val(),
					id: $("#landingR").attr("data-id") 
				},
				success: function(data){
					$("#landingBtnR").html("Boton Inactivo   "+"<span class='mif-thumbs-up mif-ani-bounce'></span>");
					$("#landingBtnWeb").attr("disabled",true);
					$("#btnWeb").attr("disabled",true);
					$("#paso_3").show();
				}
			})
		}
	});

	$(".checkLanding").click(function(){
		if($(this).is(":checked")){
			$.ajax({
				type: "GET",
				url: "ajax/landingActualizarEstado.php",
				data: {
					id: $(this).attr("data-id"),
					t: 1
				},
				success: function(data){

				}
			})
		}else{
			alert("none");
		}

	})

	$("#screenSelect").change(function(){
		if ($(this).val() == 2) {
			$("#screenText").show();
			$("#screenColor").show();
			$("#screenBg").show();
			$("#screenBoton").show();
			$("#screenImage").hide();
		}else if ($(this).val() == 1) {
			$("#screenText").hide();
			$("#screenColor").hide();
			$("#screenBg").hide();
			$("#screenBoton").show();
			$("#screenImage").show();
		}else{
			$("#screenText").hide();
			$("#screenColor").hide();
			$("#screenBg").hide();
			$("#screenBoton").hide();
			$("#screenImage").hide();
		}
	})

	$("#screenGuardar").click(function(){
		if ($("#screenSelect").val()==2) {
			if ($("#screenTextInput").val()=="") {
				alert("No introdujo ningun Texto");
			}else{
				$.ajax({
					type: "GET",
					url: "ajax/landingScreenNew.php",
					data:{
						id: $("#landingR").attr("data-id"),
						tipo: $("#screenSelect").val(),
						content: $("#screenTextInput").val(),
						cf: $("#screenBgInput").val(),
						ct: $("#screenColorInput").val()
					},
					success: function(data){
						$("#screenMsg").html("Tiene "+(parseInt(data))+" Screen guardado...");
						$("#screenContador").val(parseInt(data)+1);
						$("#screenSelect").val(0);
						$("#screenTextInput").val("");
						$("#subirImageInput").val("");
						$("#screenColorInput").val("");
						$("#screenBgInput").val("");
						$("#screenText").hide();
						$("#screenColor").hide();
						$("#screenBg").hide();
						$("#screenBoton").hide();
						$("#screenImage").hide();
						if (parseInt(data)>=6) {
							$("#paso_4").show();
						}
					}
				})
			}
		}else if($("#screenSelect").val()==1){
			if ($("#screenImageInput").val()=="") {
				alert("No introdujo ninguna Imagen");
			}else{
				var fData = new FormData($("#screenImageForm")[0]);
				$.ajax({
					type: "POST",
					url: "ajax/landingScreenImage.php",
					data: fData,
					contentType: false,
					processData: false,
					success: function(data){
						$.ajax({
							type: "GET",
							url: "ajax/landingScreenNew.php",
							data:{
								id: $("#landingR").attr("data-id"),
								tipo: $("#screenSelect").val(),
								content: data,
								cf: "",
								ct: ""
							},
							success: function(data){
								$("#screenMsg").html("Tiene "+(parseInt(data))+" Screen guardado...");
								$("#screenContador").val(parseInt(data)+1);
								$("#screenSelect").val(0);
								$("#screenTextInput").val("");
								$("#screenImageInput").val("");
								$("#screenColorInput").val("");
								$("#screenBgInput").val("");
								$("#screenText").hide();
								$("#screenColor").hide();
								$("#screenBg").hide();
								$("#screenBoton").hide();
								$("#screenImage").hide();
								if (parseInt(data)>=6) {
									$("#paso_4").show();
								}
							}
						})
					}
				})
			}
		}
	})

	$("#landingBtnBeneficios").click(function(){
		$.ajax({
			type: "GET",
			url: "ajax/landingBenefitsNew.php",
			data: {
				id: $("#landingR").attr("data-id"),
				h1: $("#titBeneficio1").val(),
				b1: $("#desBeneficio1").val(),
				h2: $("#titBeneficio2").val(),
				b2: $("#desBeneficio2").val(),
				h3: $("#titBeneficio3").val(),
				b3: $("#desBeneficio3").val(),
				h4: $("#titBeneficio4").val(),
				b4: $("#desBeneficio4").val(),
				h5: $("#titBeneficio5").val(),
				b5: $("#desBeneficio5").val(),
				h6: $("#titBeneficio6").val(),
				b6: $("#desBeneficio6").val()
			},
			success: function(data){
				$("#landingBenR").html("Beneficios Cargados   "+"<span class='mif-thumbs-up mif-ani-bounce'></span>");
				$("#landingBtnBeneficios").attr("disabled",true);
				$("#titBeneficio1").attr("disabled",true);
				$("#desBeneficio1").attr("disabled",true);
				$("#titBeneficio2").attr("disabled",true);
				$("#desBeneficio2").attr("disabled",true);
				$("#titBeneficio3").attr("disabled",true);
				$("#desBeneficio3").attr("disabled",true);
				$("#titBeneficio4").attr("disabled",true);
				$("#desBeneficio4").attr("disabled",true);
				$("#titBeneficio5").attr("disabled",true);
				$("#desBeneficio5").attr("disabled",true);
				$("#titBeneficio6").attr("disabled",true);
				$("#desBeneficio6").attr("disabled",true);
				$("#paso_5").show();
			}
		})
	})
	$("#landingBtnTestimonios").click(function(){
		if ($("#image").val() == "" || $("#header").val() == "" || $("#body").val() == "" || $("#footer").val() == "") {
			alert("Por favor llena todos los campos");
		}else{
			var fData = new FormData($("#testimonioForm")[0]);
				$.ajax({
					type: "POST",
					url: "ajax/landingTestimonialsImage.php",
					data: fData,
					contentType: false,
					processData: false,
					success: function(data){
								if (data.substr(0,5) == "Error") {
									alert(data);
								}else{
									$("#pasosTestimonios").empty();
									$("#pasosTestimonios").html(data);
									$("#testimonioForm")[0].reset();
									if ($("#pasosTestimonios > li").length == 3) {
										$("#image").attr("disabled", true);
										$("#header").attr("disabled", true);
										$("#body").attr("disabled", true);
										$("#footer").attr("disabled", true);
										$("#landingBtnTestimonios").attr("disabled", true);
										$("#paso_6").show();
									}
									
								}
							}
				})

		}
	})

	$("#landing_btn_conf").click(function(){

	})
})


function actualizarCategoria(){
		$.ajax({
				type: "GET",
				url: "ajax/blogCategoriaDet.php",
				data:{},
				success: function(data){
					$("#tbody-Categoria").empty();
					$("#tbody-Categoria").append(data);
					$("#tabla-Categoria").DataTable();
					$(".checEdo").change(function(){
						var id = $(this).attr("data-id");
						var idEdo = $(this).attr("data-edo");
						$.ajax({
							type: "GET",
							url: "ajax/blogCategoriaUp.php",
							data: {
								id: id,
								idEdo: idEdo
							},
							success: function(){
								actualizarCategoria();
							}
						})
					})
				}
			})
	};

	function actualizarNotasBlog(){
		$.ajax({
			type: "GET",
			url: "ajax/blogNotas.php",
			data: {},
			success: function(data){
				$("#tbody-notas-blog").empty();
				$("#tbody-notas-blog").append(data);
				$("#tabla-Blog").DataTable();
				$(".checEdoArt").change(function(){
					var id = $(this).attr("data-id");
					var idEdo = $(this).attr("data-edo");
					$.ajax({
						type: "GET",
						url: "ajax/blogNotasUp.php",
						data: {
							id: id,
							idEdo: idEdo
						},
						success: function(){
							actualizarNotasBlog();			
						}
					})
				})
			}
		})
	}

	function actualizarLandingConf(){
		$.ajax({
			type: "POST",
			url: "ajax/landingConfiguracion.php",
			dataType: "json",
			data: {
				tipo: "Actualizar"
			},
			success: function(data){
				//$("#bgP_Landing").val(data[1]);
				$("#bgS_Landing").val(data[2]);
				$("#font_landing").val(data[3]);
			}
		})
	}

	function actualizarLandingAdm(){
		$.ajax({
			type: "POST",
			url: "ajax/landingDatos.php",
			dataType: "json",
			success: function(data){
				$("#tAdmLanding").empty();
				for(var i=0; i<data.length; i++){
					$("#tAdmLanding").html("<div>"+data[i]["nombre"]+"</div>")	
				}
			}
		})
	}

	// <?php
	// 								$dBtn = landingBtn::datos();
	// 								for ($i=0; $i < count($dBtn); $i++) { 
	// 								?>
	// 									<tr>
	// 										<td><?php echo $i+1;?></td>
	// 										<td><?php echo $dBtn[$i]["nombre"]; ?></td>
	// 										<td><?php echo $dBtn[$i]["fecha_publicacion"]; ?></td>
	// 										<td><?php echo $dBtn[$i]["estado"]; ?></td>
	// 										<td class="align-center">
	// 											<label class="input-control checkbox">
	// 												<?php
	// 												if ($dBtn[$i]["estado"] == "Activo") {
	// 												?>
	// 													<input type="checkbox" checked data-id="<?php echo $dBtn[$i]['id']; ?>" class="checkLanding">
	// 												<?php
	// 												}else{
	// 												?>
	// 													<input type="checkbox" data-id="<?php echo $dBtn[$i]['id']; ?>" class="checkLanding">
	// 												<?php	
	// 												}
	// 												?>
	// 												<span class="check"></span>
	// 											</label>
	// 										</td>
	// 									</tr>
	// 								<?php
	// 								}
	// 							?>