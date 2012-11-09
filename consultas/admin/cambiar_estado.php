<?php
	session_start();
	if (isset($_REQUEST['con'])) {
		include('../../clases/conexion.php');		
		if ($_REQUEST['con']==1) {//visitantes
			if (isset($_REQUEST['id'])) {
				$sql='SELECT `estado` FROM `usuarios` WHERE `tipo` = 1 AND `id` = '.$_REQUEST['id'];
				include('../../clases/sql.php');
				if ($result > 0){
					if($row = mysql_fetch_array($result)){
						if ($row['estado']==0) {
							$sql='UPDATE `usuarios` SET `estado`= 1 WHERE `tipo` = 1 AND `id` = '.$_REQUEST['id'];
						}else{
							$sql='UPDATE `usuarios` SET `estado`= 0 WHERE `tipo` = 1 AND `id` = '.$_REQUEST['id'];							
						}
					}
				}
				$_SESSION['reg1']=1;
			}
		}elseif ($_REQUEST['con']==2) { //Usuarios
			if (isset($_REQUEST['id'])) {
				$sql='SELECT `estado` FROM `usuarios` WHERE `tipo` = 2 AND `id` = '.$_REQUEST['id'];
				include('../../clases/sql.php');
				if ($result > 0){
					if($row = mysql_fetch_array($result)){
						if ($row['estado']==0) {
							$sql='UPDATE `usuarios` SET `estado`= 1 WHERE `tipo` = 2 AND `id` = '.$_REQUEST['id'];
						}else{
							$sql='UPDATE `usuarios` SET `estado`= 0 WHERE `tipo` = 2 AND `id` = '.$_REQUEST['id'];							
						}
					}
				}
				$_SESSION['reg2']=1;
			}
		}elseif ($_REQUEST['con']==3) { //Tipos
			$sql='SELECT `estado` FROM `usuarios_tipo` WHERE `id` = '.$_REQUEST['id'];
			include('../../clases/sql.php');
			if ($result > 0){
				if($row = mysql_fetch_array($result)){
					if ($row['estado']==0) {
						$sql='UPDATE `usuarios_tipo` SET `estado`= 1 WHERE `id` = '.$_REQUEST['id'];
					}else{
						$sql='UPDATE `usuarios_tipo` SET `estado`= 0 WHERE `id` = '.$_REQUEST['id'];							
					}
				}
			}
			$_SESSION['reg3']=1;
		}elseif ($_REQUEST['con']==4) { //Cotizaciones
			$sql='SELECT `estado` FROM `cotizaciones` WHERE `id` = '.$_REQUEST['id'];
			include('../../clases/sql.php');
			if ($result > 0){
				if($row = mysql_fetch_array($result)){
					if ($row['estado']==0) {
						$sql='UPDATE `cotizaciones` SET `estado`= 1 WHERE `id` = '.$_REQUEST['id'];
					}else{
						$sql='UPDATE `cotizaciones` SET `estado`= 0 WHERE `id` = '.$_REQUEST['id'];							
					}
				}
			}
			$_SESSION['reg4']=1;
		}elseif ($_REQUEST['con']==5) {
			$sql='SELECT `estado` FROM `paquetes` WHERE `id` = '.$_REQUEST['id'];
			include('../../clases/sql.php');
			if ($result > 0){
				if($row = mysql_fetch_array($result)){
					if ($row['estado']==0) {
						$sql='UPDATE `paquetes` SET `estado`= 1 WHERE `id` = '.$_REQUEST['id'];
					}else{
						$sql='UPDATE `paquetes` SET `estado`= 0 WHERE `id` = '.$_REQUEST['id'];							
					}
				}
			}
			$_SESSION['reg5']=1;
		}elseif ($_REQUEST['con']==6) {
			$sql='SELECT `estado` FROM `servicios` WHERE `id` = '.$_REQUEST['id'];
			include('../../clases/sql.php');
			if ($result > 0){
				if($row = mysql_fetch_array($result)){
					if ($row['estado']==0) {
						$sql='UPDATE `servicios` SET `estado`= 1 WHERE `id` = '.$_REQUEST['id'];
					}else{
						$sql='UPDATE `servicios` SET `estado`= 0 WHERE `id` = '.$_REQUEST['id'];							
					}
				}
			}
			$_SESSION['reg6']=1;
		}
		mysql_query($sql,$link);
		header('location: ../../admin/');
	}
?>