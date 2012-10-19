<?php
	include('../clases/conexion.php');
	if(isset($link) == 1 && $link != 0){
		session_start();

		if(isset($_REQUEST['ced'])){ $ced = $_REQUEST['ced']; }
		if(isset($_REQUEST['nombre'])){ $nombre = $_REQUEST['nombre']; }
		if(isset($_REQUEST['nombre2'])){ $nombre2 = $_REQUEST['nombre2']; }
		if(isset($_REQUEST['apellido'])){ $apellido = $_REQUEST['apellido']; }
		if(isset($_REQUEST['apellido2'])){ $apellido2 = $_REQUEST['apellido2']; }
		if(isset($_REQUEST['correo'])){ $correo = $_REQUEST['correo']; }
		if(isset($_REQUEST['direccion'])){ $direccion = $_REQUEST['direccion']; }
		if(isset($_REQUEST['user'])){ $user = $_REQUEST['user']; }
		if(isset($_REQUEST['pass'])){ $pass = md5($_REQUEST['pass']); }

		$sql='INSERT INTO `usuarios`(`id`, `user`, `pass`, `tipo`) VALUES ("'.$ced.'","'.$user.'","'.$pass.'","2"); ';
		include('../clases/sql.php');
		$sql2='INSERT INTO `persona`(`id`, `nombre`, `nombre2`, `apellido`, `apellido2`, `correo`, `direccion`, `ubicacion`, `usuario`) VALUES ("'.$ced.'","'.$nombre.'","'.$nombre2.'","'.$apellido.'","'.$apellido2.'","'.$correo.'","'.$direccion.'","'.$_SESSION['id_ubicacion'].'","'.$ced.'");';
		include('../clases/sql.php');
		echo $sql;
		echo $sql2;
		exit();
	}else{ echo 'No existe conexion a la db.'; }
?>
	<script type="text/javascript" src="../themes/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
		$(window).ready(function(){
			alert('Usuario registrado con exito!');
			$('#contacto,#videos,#movil,#publicidad,#home,#datosusuarios,#compra,#facturas').hide(1000);
    		$('#seccion,#registro').fadeIn(2000);
		});
	</script>
<?php
	if(isset($link) == 1 && $link != 0){ header('location: ../colombia/'); }
?>