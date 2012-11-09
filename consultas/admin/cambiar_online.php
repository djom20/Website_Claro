<?php
	session_start();
	if (isset($_REQUEST['con'])) {
		include('../../clases/conexion.php');
		if ($_REQUEST['con']==1) {//visitantes
			if (isset($_REQUEST['id'])) {
				$sql='SELECT `online` FROM `usuarios` WHERE `tipo` = 1 AND `id` = '.$_REQUEST['id'];
				include('../../clases/sql.php');
				if ($result > 0){
					if($row = mysql_fetch_array($result)){
						if ($row['online']==0) {
							$sql='UPDATE `usuarios` SET `online`= 1 WHERE `tipo` = 1 AND `id` = '.$_REQUEST['id'];
						}else{
							$sql='UPDATE `usuarios` SET `online`= 0 WHERE `tipo` = 1 AND `id` = '.$_REQUEST['id'];							
						}
					}
				}
				$_SESSION['reg1']=1;
			}
		}elseif ($_REQUEST['con']==2) { //Usuarios
			if (isset($_REQUEST['id'])) {
				$sql='SELECT `online` FROM `usuarios` WHERE `tipo` = 2 AND `id` = '.$_REQUEST['id'];
				include('../../clases/sql.php');
				if ($result > 0){
					if($row = mysql_fetch_array($result)){
						if ($row['online']==0) {
							$sql='UPDATE `usuarios` SET `online`= 1 WHERE `tipo` = 2 AND `id` = '.$_REQUEST['id'];
						}else{
							$sql='UPDATE `usuarios` SET `online`= 0 WHERE `tipo` = 2 AND `id` = '.$_REQUEST['id'];							
						}
					}
				}
				$_SESSION['reg2']=1;
			}
		}
		mysql_query($sql,$link);
		header('location: ../../admin/');
	}
?>