$(document).ready(function(){
	$('#usuarios,#cotizaciones,#empresas,#visitantes,#inicio,#tipos,#compras,#seguridad,#paquetes,#asignaciones,#visitantes_editar').hide(1000);
	$('li').removeClass('active');
	$('#servicios').fadeIn(2000);
	$('#linkpaquetesservicios').addClass('active open');
});