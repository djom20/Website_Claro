<?php
	session_start();
	include('../clases/conexion.php');
	echo 'ubi: '.$_SESSION['ubicacion'].'<br>';
	echo 'id: '.$_SESSION['id_ubicacion'].'<br>';
	if(isset($link) == 1 && $link != 0){
		if (isset($_REQUEST['form'])) {
			if ($_REQUEST['form']==fromu) {
				if(isset($_REQUEST['ced'])){ $ced = $_REQUEST['ced']; }
				if(isset($_REQUEST['nombre'])){ $nombre = $_REQUEST['nombre']; }
				if(isset($_REQUEST['nombre2'])){ $nombre2 = $_REQUEST['nombre2']; }
				if(isset($_REQUEST['apellido'])){ $apellido = $_REQUEST['apellido']; }
				if(isset($_REQUEST['apellido2'])){ $apellido2 = $_REQUEST['apellido2']; }
				if(isset($_REQUEST['correo'])){ $correo = $_REQUEST['correo']; }
				if(isset($_REQUEST['direccion'])){ $direccion = $_REQUEST['direccion']; }
				if(isset($_REQUEST['user'])){ $user = $_REQUEST['user']; }
				if(isset($_REQUEST['pass'])){ $pass = md5($_REQUEST['pass']); }

				$sql='INSERT INTO `usuarios`(`id`, `user`, `pass`, `tipo`, `ip`) VALUES ("'.$ced.'","'.$user.'","'.$pass.'","2","'.$_SERVER['REMOTE_ADDR'].'");';
				include('../clases/sql.php');
				echo $sql;
				$sql='INSERT INTO `persona`(`id`, `nombre`, `nombre2`, `apellido`, `apellido2`, `correo`, `direccion`, `ubicacion`, `usuario`) VALUES ("'.$ced.'","'.$nombre.'","'.$nombre2.'","'.$apellido.'","'.$apellido2.'","'.$correo.'","'.$direccion.'","'.$_SESSION['id_ubicacion'].'","'.$ced.'");';
				include('../clases/sql.php');
				echo '<br>';
				echo $sql;
			}else{
				if(isset($_REQUEST['nit'])){ $ced = $_REQUEST['nit']; }
				if(isset($_REQUEST['nombre'])){ $nombre = $_REQUEST['nombre']; }
				if(isset($_REQUEST['representante'])){ $representante = $_REQUEST['representante']; }
				if(isset($_REQUEST['direccion'])){ $direccion = $_REQUEST['direccion']; }
				if(isset($_REQUEST['correo'])){ $correo = $_REQUEST['correo']; }
				if(isset($_REQUEST['user'])){ $user = $_REQUEST['user']; }
				if(isset($_REQUEST['pass'])){ $pass = md5($_REQUEST['pass']); }

				$sql='INSERT INTO `usuarios`(`id`, `user`, `pass`, `tipo`, `ip`) VALUES ("'.$ced.'","'.$user.'","'.$pass.'","2","'.$_SERVER['REMOTE_ADDR'].'");';
				include('../clases/sql.php');
				echo $sql;
				$sql='INSERT INTO `empresa`(`id`, `nombre`, `representante`, `direccion`, `correo`, `ubicacion`, `usuario`) VALUES ("'.$ced.'","'.$nombre.'","'.$representante.'","'.$direccion.'","'.$correo.'","'.$_SESSION['id_ubicacion'].'","'.$ced.'")';
				include('../clases/sql.php');
				echo '<br>';
				echo $sql;
			}
		}
		$_SESSION['reg1']=1;
		header('location: ../colombia/');
	}
?>