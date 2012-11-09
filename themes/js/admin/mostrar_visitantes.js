$(document).ready(function(){
	$('#empresas,#seguridad,#tipos,#usuarios,#inicio,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#visitantes_editar').hide(1000);
	$('li').removeClass('active');
    $('#visitantes').fadeIn(2000);
	$('#personal').addClass('active open');
});