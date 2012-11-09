<?php
	session_start();
	if(isset($_SESSION['userid'])){
		$sql='SELECT SUM(`precio`) as total FROM `cotizaciones` WHERE `estado` = 1 AND `usuario` = '.$_SESSION['userid'];
		include('../clases/consultas.php');
		if($result > 0){
			if($row = mysql_fetch_array($result)){ $total = $row['total']; }
			mysql_free_result($result);
		}

		$sql = 'INSERT INTO `compras` (`usuario`,`total`) VALUES ("'.$_SESSION['userid'].'","'.$total.'")';
		include('../clases/sql.php');
		$compraid = mysql_insert_id();

		$sql = 'SELECT `paquete` FROM `cotizaciones` WHERE `estado` = 1 AND `usuario` = '.$_SESSION['userid'];
		include('../clases/sql.php');
		if($result > 0){
			while($row = mysql_fetch_array($result)){
				$sql='INSERT INTO `detalles_compra` (`compra`, `paquete`) VALUES ("'.$compraid.'","'.$row['paquete'].'")';
				mysql_query($sql,$link);
    			echo mysql_error($link);
			}
			mysql_free_result($result);
		}

		$sql = 'UPDATE `cotizaciones` SET `estado` = 0 WHERE `estado` = 1 AND `usuario` = '.$_SESSION['userid'];
		include('../clases/sql.php');
		echo 'Compra realizada con Exito.';

		$sql = 'INSERT INTO `facturas`(`usuario`) VALUES ("'.$_SESSION['userid'].'")';
		include('../clases/sql.php');
		$facturaid = mysql_insert_id();

		$sql = 'INSERT INTO `detalles_factura`(`factura`, `compra`) VALUES ("'.$facturaid.'","'.$compraid.'")';
		include('../clases/sql.php');
		echo 'Factura realizada con Exito.';


		header('location: ../colombia/');
	}
?>