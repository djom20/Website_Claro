<?php 
	if (isset($_SESSION['userid'])) {
		$sql='SELECT count(`id`) as coti FROM `cotizaciones` WHERE `estado` = 1';
		include('../clases/consultas.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){
				echo $row['coti'];
			}
		}
	}
?>