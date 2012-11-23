<?php 
	if (isset($_REQUEST['tipo'])) {
		session_start();
		if ($_REQUEST['tipo']==4) {
			echo $_REQUEST['tipo'];
			$sql='INSERT INTO `paquetes`(`nombre`) VALUES ("'.$_REQUEST['nombre'].'")';
			echo $sql;
			include('../../clases/consultas.php');
			$_SESSION['reg5']=1;
		}elseif ($_REQUEST['tipo']==5) {
			$sql='INSERT INTO `servicios`(`nombre`, `descripcion`, `precio`) VALUES ("'.$_REQUEST['nombre'].'","'.$_REQUEST['descripcion'].'","'.$_REQUEST['precio'].'")';
			include('../../clases/consultas.php');
			$_SESSION['reg6']=1;
		}
		header('location: ../../admin/');
	}
?>