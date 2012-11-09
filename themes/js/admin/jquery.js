$(window).ready(function(){
	$('.linkhome').click(function(e){
		$('#empresas,#seguridad,#tipos,#usuarios,#visitantes,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#visitantes_editar').hide(1000);
		$('li').removeClass('active');
		$('.linkhome').addClass('active');
        $('#inicio').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$('.linkvisitantes').click(function(e){
		$('#empresas,#seguridad,#tipos,#usuarios,#inicio,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#visitantes_editar').hide(1000);
		$('li').removeClass('active');
        $('#visitantes').fadeIn(2000);
		$('#personal').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkusuarios').click(function(e){
		$('#empresas,#seguridad,#tipos,#visitantes,#inicio,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#visitantes_editar').hide(1000);
		$('li').removeClass('active');
        $('#usuarios').fadeIn(2000);
		$('#personal').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkempresas').click(function(e){
		$('#usuarios,#seguridad,#tipos,#visitantes,#inicio,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#visitantes_editar').hide(1000);
		$('li').removeClass('active');
        $('#empresas').fadeIn(2000);
		$('#personal').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linktipos').click(function(e){
		$('#usuarios,#seguridad,#empresas,#visitantes,#inicio,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#visitantes_editar').hide(1000);
		$('li').removeClass('active');
        $('#tipos').fadeIn(2000);
		$('#personal').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkcomprasr').click(function(e){
		$('#usuarios,#seguridad,#empresas,#visitantes,#inicio,#tipos,#cotizaciones,#paquetes,#servicios,#asignaciones,#visitantes_editar').hide(1000);
		$('li').removeClass('active');
        $('#compras').fadeIn(2000);
		$('#linkcompras').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkcotizaciones').click(function(e){
		$('#usuarios,#seguridad,#empresas,#visitantes,#inicio,#tipos,#compras,#paquetes,#servicios,#asignaciones,#visitantes_editar').hide(1000);
		$('li').removeClass('active');
        $('#cotizaciones').fadeIn(2000);
		$('#linkcompras').addClass('active');
        return false;
        e.preventDefault();
	});

	$("#linkseguridad").click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#paquetes,#servicios,#asignaciones,#visitantes_editar').hide(1000);
		$('li').removeClass('active');
		$('#seguridad').fadeIn(2000);
		$('.linkhome').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkpaquetes').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#servicios,#asignaciones,#visitantes_editar').hide(1000);
		$('li').removeClass('active');
		$('#paquetes').fadeIn(2000);
		$('#linkpaquetesservicios').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkservicios').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#asignaciones,#visitantes_editar').hide(1000);
		$('li').removeClass('active');
		$('#servicios').fadeIn(2000);
		$('#linkpaquetesservicios').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkasignaciones').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#visitantes_editar').hide(1000);
		$('li').removeClass('active');
		$('#asignaciones').fadeIn(2000);
		$('#linkpaquetesservicios').addClass('active');
        return false;
        e.preventDefault();
	});



	$('.linkvisitantes_editar').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones').hide(1000);
		$('li').removeClass('active');
		$('#visitantes_editar').fadeIn(2000);
		$('#personal').addClass('active');
        return false;
        e.preventDefault();
	});
});