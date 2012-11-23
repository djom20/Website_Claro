<?php 
	if (isset($_REQUEST['tipo'])) {
		session_start();
		if ($_REQUEST['tipo']==1) {
			if (isset($_REQUEST['id'])) {
				if (isset($_REQUEST['pass'])==1 && $_REQUEST['pass']!='') {
					$sql='UPDATE `usuarios` SET `user`="'.$_REQUEST['nombre'].'",`pass`="'.md5($_REQUEST['pass']).'",`tipo`="'.$_REQUEST['tipou'].'" WHERE `id`='.$_REQUEST['id'];
				}else{
					$sql='UPDATE `usuarios` SET `user`="'.$_REQUEST['nombre'].'",`tipo`="'.$_REQUEST['tipou'].'" WHERE `id`='.$_REQUEST['id'];					
				}
				include('../../clases/consultas.php');
				$_SESSION['reg2']=1;
			}
		}elseif ($_REQUEST['tipo']==2) {
			if (isset($_REQUEST['id'])) {
				$sql='UPDATE `empresa` SET `nombre`="'.$_REQUEST['nombre'].'",`representante`="'.$_REQUEST['representante'].'",`direccion`="'.$_REQUEST['direccion'].'",`correo`="'.$_REQUEST['correo'].'",`ubicacion`="'.$_REQUEST['ubicacion'].'" WHERE `id` = '.$_REQUEST['id'];
				include('../../clases/consultas.php');
				$_SESSION['reg7']=1;
			}
		}elseif ($_REQUEST['tipo']==3) {
			if (isset($_REQUEST['id'])) {
				$sql='UPDATE `usuarios_tipo` SET `nombre`="'.$_REQUEST['nombre'].'",`descripcion`="'.$_REQUEST['descripcion'].'" WHERE `id` = '.$_REQUEST['id'];
				include('../../clases/consultas.php');
				$_SESSION['reg3']=1;
			}
		}elseif ($_REQUEST['tipo']==4) {
			if (isset($_REQUEST['id'])) {
				$sql='UPDATE `paquetes` SET `nombre`="'.$_REQUEST['nombre'].'",`precio`="'.$_REQUEST['precio'].'" WHERE `id` = '.$_REQUEST['id'];
				include('../../clases/consultas.php');
				$_SESSION['reg5']=1;
			}
		}elseif ($_REQUEST['tipo']==5) {
			if (isset($_REQUEST['id'])) {
				$sql='UPDATE `servicios` SET `nombre`="'.$_REQUEST['nombre'].'",`descripcion`="'.$_REQUEST['descripcion'].'",`precio`="'.$_REQUEST['precio'].'" `id` = '.$_REQUEST['id'];
				include('../../clases/consultas.php');
				$_SESSION['reg6']=1;
			}
		}
		header('location: ../../admin/');
	}
?>