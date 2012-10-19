<?php 
	session_start();
	$ubi=$_SESSION['ubicacion'];
	//$_SERVER['REMOTE_ADDR'];
	include('offline.php');
	session_destroy();

	session_start();
	$_SESSION['ubicacion']=$ubi;
	header('location: ../colombia/');
?>