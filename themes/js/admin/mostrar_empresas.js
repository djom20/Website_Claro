$(document).ready(function(){
	$('#usuarios,#seguridad,#tipos,#visitantes,#inicio,#compras,#cotizaciones,#paquetes,#servicios,#asignaciones,#visitantes_editar').hide(1000);
	$('li').removeClass('active');
    $('#empresas').fadeIn(2000);
	$('#personal').addClass('active open');
});