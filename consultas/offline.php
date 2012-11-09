<?php 
	if(isset($_SESSION['userid'])){
		$sql='UPDATE `usuarios` SET `online` = 0 WHERE `id` = "'.$_SESSION['userid'].'" AND `estado` = 1';
		include('../clases/consultas.php');
		mysql_free_result($result);
	}
?>