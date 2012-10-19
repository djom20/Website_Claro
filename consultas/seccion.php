<?php
	include('../clases/conexion.php');

	if(isset($link) == 1 && $link != 0){
		session_start();

		if(isset($_REQUEST['user'])){ $user = $_REQUEST['user']; }
		if(isset($_REQUEST['pass'])){ $pass = md5($_REQUEST['pass']); }

		$sql='SELECT `estado`,`online` FROM `usuarios` WHERE `user`="'.$user.'" AND `pass`="'.$pass.'"';
		include('../clases/sql.php');
		if($result != 0){
			if($row=mysql_fetch_array($result)){ $estado = $row['estado']; $online = $row['online']; }
			if($estado == 0){
				$my_error='El usuario no esta habilitado, contactese con el administardor.';
				header('location: ../errores/no_url.php?error='.$my_error);
				exit();
			}
			if($online == 1){
				$my_error='El usuario ya esta registrado, contactese con el administardor.';
				header('location: ../errores/no_url.php?error='.$my_error);
				exit();
			}
		}else{ echo 'no existe un resultado.'; }


		$sql='SELECT `id`,`tipo` FROM `usuarios` WHERE `user`="'.$user.'" AND `pass`="'.$pass.'" AND `estado`= 1 AND `online`= 0';
		include('../clases/sql.php');

		if($result != 0){
			if($row=mysql_fetch_array($result)){ $_SESSION['userid'] = $row['id']; $_SESSION['user']=$user; $_SESSION['pass']=$pass; }
			//echo $_SESSION['userid'];
			include('../consultas/online.php');
			//redireccionar!!
			header('location: ../colombia/usuario.php');
		}else{ $my_error='no existe un resultado.'; header('location: ../errores/no_url.php?error='.$my_error); }
	}else{ $my_error='No existe conexion a la db.'; header('location: ../errores/no_url.php?error='.$my_error); }
?>