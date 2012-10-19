<?php
	session_start();
	if(isset($_SESSION['ubicacion'])==1 && $_SESSION['ubicacion'] =! ''){ 
		/*echo $_SESSION['ubicacion']; exit();*/
		header('location: colombia/');
	}else{
		include('mod/paises.php');
	}
?>