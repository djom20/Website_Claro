<?php 
	session_start();
	if(isset($_REQUEST['password'])){ $pass = md5($_REQUEST['password']); }
	if(isset($_REQUEST['password2'])){ $pass2 = md5($_REQUEST['password2']); }

	if ($pass == $pass2) {
		$sql='UPDATE `usuarios` SET `pass`="'.$pass.'" WHERE `online` = 1 AND `estado` = 1 AND `tipo` = 3 AND `id` ='.$_SESSION['userid'];
		include('../../clases/consultas.php');
		echo '<script type="text/javascript">alert("El password a sido cambiado con Exito.");</script>';
	}else{
		echo '<script type="text/javascript">alert("Los password no son iguales.");</script>';
	}
	header('../../admin/');
?>