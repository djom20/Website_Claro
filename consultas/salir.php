<?php
	session_start();
	include('desconectar.php');
	$ubi=$_SESSION['ubicacion'];
	include('offline.php');
	session_destroy();

	session_start();
	$_SESSION['ubicacion']=$ubi;
	header('location: ../colombia/');
?>