<?php 
	if (isset($_SESSION['userid'])) {
		$sql='SELECT COUNT(`id`) AS cant FROM `usuarios` WHERE `user` LIKE "unregistered%" AND `estado` = 1 AND `tipo` = 1';
		include('../clases/consultas.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){
				echo $row['cant'];
			}
		}
	}
?>