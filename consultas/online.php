<?php 
	if(isset($_SESSION['userid'])){
		$sql='UPDATE `usuarios` SET `online` = 1 WHERE `id` = "'.$_SESSION['userid'].'" AND `estado` = 1';
		include('../clases/consultas.php');
	}
?>