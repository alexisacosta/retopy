$(document).ready(function(){
	$("#inputContrasena").val("");
	$("#inputUsuario").val("");

	/*Sidebar*/
	$("#btnSidebarApp").click(function(){
		$("#barraSidebarApp").toggle("flip");
	});	

	$("#btnCloseSidebarApp").click(function(){
		$("#barraSidebarApp").hide("flip");
	});


	/*Menu Top*/
	var menu = $('.menu-principal');
	$(window).bind('scroll', function(e){
		if ($(window).scrollTop() > 100) {
				menu.addClass('fixed-top');
			}else{
				menu.removeClass('fixed-top');
			}
	});

	/*Evaluación Gratuita de Bienestar*/
	$("#btnRegistro_evaluacion").click(function(){
		$.ajax({
			type: "POST",
			url: "ajax/suscripcion.php",
			data: {
				nombre_sus: $("#nombre_evaluacion").val(),
				apellido_sus: $("#apellido_evaluacion").val(),
				email_sus: $("#email_evaluacion").val(),
				tel_sus: $("#telefono_evaluacion").val(),
				int_sus: 4,  //Evaluación Gratuita de Bienestar
				com_sus: "Necesito una evaluación de bienestar"
			},
			success: function(data){
				$("#nombre_evaluacion").val("");
				$("#apellido_evaluacion").val("");
				$("#email_evaluacion").val("");
				$("#telefono_evaluacion").val("");
				$("#modal-evaluacion").modal("hide");
				alert(data);
			}
		})
	})
	/*Cambio*/
	$("#btnRegistro_cambio").click(function(){
		$.ajax({
			type: "POST",
			url: "ajax/suscripcion.php",
			data: {
				nombre_sus: $("#nombre_cambio").val(),
				apellido_sus: $("#apellido_cambio").val(),
				email_sus: $("#email_cambio").val(),
				tel_sus: $("#telefono_cambio").val(),
				int_sus: 3,  //Quiere Cambiar
				com_sus: "Necesito cambiar. Quiero comenzar mi viaje."
			},
			success: function(data){
				$("#nombre_cambio").val("");
				$("#apellido_cambio").val("");
				$("#email_cambio").val("");
				$("#telefono_cambio").val("");
				$("#modal-cambio").modal("hide");
				alert(data);
			}
		})
	})
	/*Registrar Blog*/
	$("#btnRegistro_blog").click(function(){
		$.ajax({
			type: "POST",
			url: "ajax/suscripcion.php",
			data: {
				nombre_sus: $("#nombre_blog").val(),
				apellido_sus: $("#apellido_blog").val(),
				email_sus: $("#email_blog").val(),
				int_sus: 1,  //Quiere Cambiar
				com_sus: "Quiero recibir publicaciones de su página."
			},
			success: function(data){
				$("#nombre_blog").val("");
				$("#apellido_blog").val("");
				$("#email_blog").val("");
				alert("Muchas Gracias por Registrarte. Te enviaremos noticias para que puedas mantenerte en forma y saludable.");
			}
		})
	})
})

new WOW().init();