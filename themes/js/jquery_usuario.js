$(window).ready(function(){
	$("#linkhome2").click(function(e){
		$('#datosusuarios,#compra,#contacto').hide(1000);
        $('#home').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkusuario").click(function(e){
		$('#home,#compra,#contacto').hide(1000);
        $('#datosusuarios').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkcompra").click(function(e){
		$('#home,#datosusuarios,#contacto').hide(1000);
        $('#compra').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkcontacto2").click(function(e){
		$('#home,#datosusuarios,#compra').hide(1000);
        $('#contacto').fadeIn(2000);
        return false;
        e.preventDefault();
	});
});