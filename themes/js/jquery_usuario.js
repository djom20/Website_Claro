$(window).ready(function(){
	$('li').removeClass('active');	
	
	$("#linkhome2").click(function(e){
		$('li').removeClass('active');
		$('#datosusuarios,#compra,#contacto').hide(1000);
        $('#home').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkusuario").click(function(e){
		$('li').removeClass('active');
		$('#linkusuario').addClass('active');
		$('#home,#compra,#contacto').hide(1000);
        $('#datosusuarios').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkcompra").click(function(e){
		$('li').removeClass('active');
		$('#linkcompra').addClass('active');
		$('#home,#datosusuarios,#contacto').hide(1000);
        $('#compra').fadeIn(2000);
        return false;
        e.preventDefault();
	});

	$("#linkcontacto2").click(function(e){
		$('li').removeClass('active');
		$('#linkcontacto2').addClass('active');
		$('#home,#datosusuarios,#compra').hide(1000);
        $('#contacto').fadeIn(2000);
        return false;
        e.preventDefault();
	});
});

$(document).ready(function(){
	$(document).bind("contextmenu",function(e){  //deshabilitar el click derecho
 		//return false;
 	});
});