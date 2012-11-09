<?php 
	if (isset($_SESSION['userid'])) {
		$sql='SELECT count(`paquete`) as paquete FROM `detalles_compra` WHERE `id` > 0';
		include('../clases/consultas.php');
		if($result > 0){
			if($row=mysql_fetch_array($result)){
				echo $row['paquete'];
			}
		}
	}
?>