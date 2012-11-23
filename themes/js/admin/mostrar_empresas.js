$(document).ready(function(){
	$('#usuarios,#seguridad,#tipos,#visitantes,#inicio,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#usuarios_editar,#empresas_editar,#tipos_editar,#paquetes_editar,#servicios_editar,#usuarios_crear,#empresas_crear,#tipos_crear,#paquetes_crear,#servicios_crear,#asignar').hide(1000);
	$('li').removeClass('active');
    $('#empresas').fadeIn(2000);
	$('#personal').addClass('active open');
});