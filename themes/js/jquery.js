$(window).ready(function(){
	$("#linkhome").click(function(e){
		$('#contacto,#videos,#movil,#publicidad,#compras,#datosusuarios,#compra,#facturas').hide(1000);
		$('li').removeClass('active');
        $('#home').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkcompras").click(function(e){
		$('#contacto,#videos,#movil,#publicidad,#home,#datosusuarios,#compra,#facturas').hide(1000);
		$('li').removeClass('active');
		$('#linkcompras').addClass('active');
        $('#compras').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkpromo").click(function(e){
		$('#contacto,#videos,#movil,#compras,#home,#datosusuarios,#compra,#facturas').hide(1000);
		$('li').removeClass('active');
		$('#linkpromo').addClass('active');
        $('#publicidad').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkmovil").click(function(e){
		$('#contacto,#videos,#publicidad,#compras,#home,#datosusuarios,#compra,#facturas').hide(1000);
		$('li').removeClass('active');
		$('#linkmovil').addClass('active');
        $('#movil').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkvideos").click(function(e){
		$('#contacto,#movil,#publicidad,#compras,#home,#datosusuarios,#compra,#facturas').hide(1000);
		$('li').removeClass('active');
		$('#linkvideos').addClass('active');
        $('#videos').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkcontacto").click(function(e){
		$('#videos,#movil,#publicidad,#compras,#home,#datosusuarios,#compra,#facturas').hide(1000);
		$('li').removeClass('active');
		$('#linkcontacto').addClass('active');
        $('#contacto').fadeIn(2000);
        return false;
        e.preventDefault();
	});



	$("#linkvideo1").click(function(e){
		$('#video2,#video3,#video4,#video5').hide(1000);
        $('#video1').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkvideo2").click(function(e){
		$('#video1,#video3,#video4,#video5').hide(1000);
        $('#video2').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkvideo3").click(function(e){
		$('#video1,#video2,#video4,#video5').hide(1000);
        $('#video3').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkvideo4").click(function(e){
		$('#video1,#video2,#video3,#video5').hide(1000);
        $('#video4').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkvideo5").click(function(e){
		$('#video1,#video2,#video3,#video4').hide(1000);
        $('#video5').fadeIn(2000);
        return false;
        e.preventDefault();
	});


	$("#aregistro").click(function(e){
		$('#seccion').hide(1000);
        $('#registro').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#cambioseccion").click(function(e){
        $('#registro').hide(1000);
		$('#seccion').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#cambioseccion2").click(function(e){
        $('#registro_empresa').hide(1000);
		$('#seccion').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#cambioregistro").click(function(e){
        $('#registro').hide(1000);
		$('#registro_empresa').fadeIn(2000);
        return false;
        e.preventDefault();
	});	
});