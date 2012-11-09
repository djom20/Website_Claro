<?php
	ob_start( 'ob_gzhandler' );
	header('Vary: Accept-Encoding');
	$cache_expire = 0;
	header("Pragma: private");
	header("Pragma: no-cache");
	header("Pragma: no-store");
	header('Expires: ' . date('D, d M Y H:i:s', time() + $cache_expire) . ' GMT');

	session_start();
	$sql='SELECT COUNT(`id`) + 1 AS cant FROM `usuarios` WHERE  `user` LIKE "unregistered%"';
	include('clases/consultas.php');
	if($result > 0){
		if($row=mysql_fetch_array($result)){ $cant = $row['cant']; }
	}

	$sql='INSERT INTO `usuarios`(`id`,`user`, `ip`, `tipo`, `online`) VALUES ('.$cant.',"unregistered'.$cant.'","'.$_SERVER['REMOTE_ADDR'].'","1","1")';
	include('clases/sql.php');

	if(isset($_SESSION['userid'])){ header('location: colombia/'); }

	if(isset($_SESSION['ubicacion'])==1 && $_SESSION['ubicacion'] =! ''){ 
		header('location: colombia/');
	}else{
		include('mod/paises.php');
	}
?>