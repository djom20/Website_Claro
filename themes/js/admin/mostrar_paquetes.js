$(document).ready(function(){
	$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
	$('li').removeClass('active');
	$('#paquetes').fadeIn(2000);
	$('#linkpaquetesservicios').addClass('active open');
});