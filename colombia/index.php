<?php 
	session_start();
	if(isset($_SESSION['userid'])){
		if($_SESSION['usertipo'] == 1){
			include('inicio.php');
		}else if($_SESSION['usertipo'] == 2){
			include('usuario.php'); 
		}else if($_SESSION['usertipo'] == 3){
			header('location: ../admin/');
		}
	}else{
		include('inicio.php');
	}
?>