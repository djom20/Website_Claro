$(window).ready(function(){
	$('.linkhome').click(function(e){
		$('#empresas,#seguridad,#tipos,#usuarios,#visitantes,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('li').removeClass('active');
		$('.linkvisitantes').addClass('active');
        $('#inicio').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$('.linkvisitantes').click(function(e){
		$('#empresas,#seguridad,#tipos,#usuarios,#inicio,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('li').removeClass('active');
        $('#visitantes').fadeIn(2000);
		$('#personal').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkusuarios').click(function(e){
		$('#empresas,#seguridad,#tipos,#visitantes,#inicio,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('li').removeClass('active');
        $('#usuarios').fadeIn(2000);
		$('#personal').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkempresas').click(function(e){
		$('#usuarios,#seguridad,#tipos,#visitantes,#inicio,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('li').removeClass('active');
        $('#empresas').fadeIn(2000);
		$('#personal').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linktipos').click(function(e){
		$('#usuarios,#seguridad,#empresas,#visitantes,#inicio,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('li').removeClass('active');
        $('#tipos').fadeIn(2000);
		$('#personal').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkcomprasr').click(function(e){
		$('#usuarios,#seguridad,#empresas,#visitantes,#inicio,#tipos,#cotizaciones,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('li').removeClass('active');
        $('#compras').fadeIn(2000);
		$('#linkcompras').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkcotizaciones').click(function(e){
		$('#usuarios,#seguridad,#empresas,#visitantes,#inicio,#tipos,#compras,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('li').removeClass('active');
        $('#cotizaciones').fadeIn(2000);
		$('#linkcompras').addClass('active');
        return false;
        e.preventDefault();
	});

	$("#linkseguridad").click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear').hide(1000);
		$('li').removeClass('active');
		$('#seguridad').fadeIn(2000);
		$('.linkhome').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkpaquetes').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('li').removeClass('active');
		$('#paquetes').fadeIn(2000);
		$('#linkpaquetesservicios').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkservicios').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('li').removeClass('active');
		$('#servicios').fadeIn(2000);
		$('#linkpaquetesservicios').addClass('active');
        return false;
        e.preventDefault();
	});

	$('.linkasignaciones').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('li').removeClass('active');
		$('#asignaciones').fadeIn(2000);
		$('#linkpaquetesservicios').addClass('active');
        return false;
        e.preventDefault();
	});


	var Id;
	$('.link_usuarios_editar').click(function(e){
		Id=$(this).attr('id');
		$("#usuarioscargar").delay(60).load('../consultas/admin/editar.php', {tipo: "1", id: Id});

		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('#usuarios_editar').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$('.link_empresas_editar').click(function(e){
		Id=$(this).attr('id');
		$("#empresascargar").delay(60).load('../consultas/admin/editar.php', {tipo: "2", id: Id});

		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones,#usuarios_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('#empresas_editar').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$('.link_tipos_editar').click(function(e){
		Id=$(this).attr('id');
		$("#tiposcargar").delay(60).load('../consultas/admin/editar.php', {tipo: "3", id: Id});

		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('#tipos_editar').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$('.link_paquetes_editar').click(function(e){
		Id=$(this).attr('id');
		$("#paquetescargar").delay(60).load('../consultas/admin/editar.php', {tipo: "4", id: Id});

		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('#paquetes_editar').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$('.link_servicios_editar').click(function(e){
		Id=$(this).attr('id');
		$("#servicioscargar").delay(60).load('../consultas/admin/editar.php', {tipo: "5", id: Id});

		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('#servicios_editar').fadeIn(2000);
		return false;
        e.preventDefault();
	});



	$('#new_user').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('#usuarios_crear').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$('#new_empresas').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('#empresas_crear').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$('#new_tipos').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,,#usuarios_crear,#empresas_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
		$('#tipos_crear').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$('#new_paquetes').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,,#usuarios_crear,#empresas_crear,#servicios_crear,#asignar').hide(1000);
		$('#paquetes_crear').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$('#new_servicios').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,,#usuarios_crear,#empresas_crear,#paquetes_crear,#asignar').hide(1000);
		$('#servicios_crear').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$('#linkasignar').click(function(e){
		$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,,#usuarios_crear,#empresas_crear,#paquetes_crear,#new_servicios').hide(1000);
		$('#asignar').fadeIn(2000);
        return false;
        e.preventDefault();
	});
});

