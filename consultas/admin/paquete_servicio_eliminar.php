<?php 
	if (isset($_REQUEST['paquete'])) {
		if (isset($_REQUEST['servicio'])) {
			//buscar precio del paquete
			$sql='SELECT `precio` FROM `paquetes` WHERE `estado`= 1 AND `id` = '.$_REQUEST['paquete'];
			include('../../clases/consultas.php');
			if (mysql_affected_rows() > 0) {
				if ($row=mysql_fetch_array($result)) {
					$ppaquete=$row['precio'];
				}
			}
			//buscar precio del servicio
			$sql='SELECT `precio` FROM `servicios` WHERE `id` = '.$_REQUEST['servicio'];
			include('../../clases/sql.php');
			if (mysql_affected_rows() > 0) {
				if ($row=mysql_fetch_array($result)) {
					$pservicio=$row['precio'];
				}
			}
			$t=$ppaquete-$pservicio;
			$sql='UPDATE `paquetes` SET `precio`="'.$t.'" WHERE `id` = '.$_REQUEST['paquete'];
			include('../../clases/sql.php');
			$sql='UPDATE `paquetes_servicios` SET `estado`= 0 WHERE `paquete` = "'.$_REQUEST['paquete'].'" AND `servicio` = "'.$_REQUEST['servicio'].'"';
			include('../../clases/sql.php');

			session_start();
			$_SESSION['reg8']=1;
			header('location: ../../admin/');
		}
	}
?>