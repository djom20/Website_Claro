<?php
	include('../clases/conexion.php');
	if(isset($link) == 1 && $link != 0){
		if (isset($_REQUEST['form'])) {
			session_start();
			if ($_REQUEST['form']=='formu') {
				if(isset($_REQUEST['ced'])){ $ced = $_REQUEST['ced']; }
				if(isset($_REQUEST['nombre'])){ $nombre = $_REQUEST['nombre']; }
				if(isset($_REQUEST['nombre2'])){ $nombre2 = $_REQUEST['nombre2']; }
				if(isset($_REQUEST['apellido'])){ $apellido = $_REQUEST['apellido']; }
				if(isset($_REQUEST['apellido2'])){ $apellido2 = $_REQUEST['apellido2']; }
				if(isset($_REQUEST['correo'])){ $correo = $_REQUEST['correo']; }
				if(isset($_REQUEST['direccion'])){ $direccion = $_REQUEST['direccion']; }
				if(isset($_REQUEST['user'])){ $user = $_REQUEST['user']; }
				if(isset($_REQUEST['pass'])){ $pass = md5($_REQUEST['pass']); }
				if(isset($_REQUEST['tipou'])){ 
					$sql='INSERT INTO `usuarios` (`id`, `user`, `pass`, `tipo`, `ip`) VALUES ("'.$ced.'","'.$user.'","'.$pass.'","'.$_REQUEST['tipou'].'","'.$_SERVER['REMOTE_ADDR'].'");';					
				}else{
					$sql='INSERT INTO `usuarios` (`id`, `user`, `pass`, `tipo`, `ip`) VALUES ("'.$ced.'","'.$user.'","'.$pass.'","2","'.$_SERVER['REMOTE_ADDR'].'");';
				}
				echo $sql,'<br>';

				//include('../clases/sql.php');
				$ubi = '';
				if (isset($_REQUEST['ubi'])) {
					if ($_REQUEST['ubi']!='') {
						$ubi=$_REQUEST['ubi'];
					}else{
						$ubi = 13;
					}
				}else{
					$ubi = 13;
				}
				$sql='INSERT INTO `persona`(`id`, `nombre`, `nombre2`, `apellido`, `apellido2`, `correo`, `direccion`, `ubicacion`, `usuario`) VALUES ("'.$ced.'","'.$nombre.'","'.$nombre2.'","'.$apellido.'","'.$apellido2.'","'.$correo.'","'.$direccion.'","'.$ubi.'","'.$ced.'");';
				echo $sql.'<br>';
				//include('../clases/sql.php');
				$_SESSION['reg2']=1;
				exit();
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
				if (isset($_REQUEST['ubi'])) {
					if ($_REQUEST['ubi']!='') {
						$ubi=$_REQUEST['ubi'];
					}else{
						$ubi = 13;
					}
				}else{
					$ubi = 13;
				}
				$sql='INSERT INTO `empresa`(`id`, `nombre`, `representante`, `direccion`, `correo`, `ubicacion`, `usuario`) VALUES ("'.$ced.'","'.$nombre.'","'.$representante.'","'.$direccion.'","'.$correo.'","'.$ubi.'","'.$ced.'")';
				include('../clases/sql.php');
				echo '<br>';
				echo $sql;
				$_SESSION['reg3']=1;
			}
		}
		header('location: ../colombia/');
	}
?>