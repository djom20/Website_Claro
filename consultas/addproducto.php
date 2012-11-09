<?php
	session_start();
	if (isset($_REQUEST['id'])==1 && isset($_REQUEST['precio'])==1) {
		$sql='INSERT INTO `cotizaciones`(`usuario`, `paquete`, `precio`) VALUES ("'.$_SESSION['userid'].'","'.$_REQUEST['id'].'","'.$_REQUEST['precio'].'")';
		include('../clases/consultas.php');
		$_SESSION['reg']=1;
		header('location: ../colombia/');
	}
?>