<?php 
	if (isset($_SESSION['userid'])) {
		$sql='SELECT count(`id`) as users FROM `usuarios` WHERE `tipo` = 2 AND `estado` = 1';
		include('../clases/consultas.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){
				echo $row['users'];
			}
		}
	}
?>